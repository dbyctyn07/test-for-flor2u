<?php

namespace App\Notifications;

use App\Partner;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UnconfirmedOrdersCancelPartner extends Notification implements ShouldQueue
{
    use Queueable;

    protected $partner;
    protected $unconfirmedOrders;

    public function __construct(Partner $partner, $unconfirmedOrders)
    {
        $this->partner = $partner;
        $this->unconfirmedOrders = $unconfirmedOrders;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {

        $allOrdersToString = "";
        foreach ($this->unconfirmedOrders as $order)
            $allOrdersToString .= "Заказ №" . $order->id . " - список продуктов: " . $order->allProductsString . ". ";

        return (new MailMessage)
            ->subject("список отмененных заказов патнера")
            ->greeting("Уважемый партнер " . $this->partner->name . ",")
            ->line("данные заказы были отменены:")
            ->line($allOrdersToString);

    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

}
