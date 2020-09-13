<?php

namespace App\Notifications;

use App\Order;
use App\Partner;
use App\Product;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderCancelPartner extends Notification implements ShouldQueue
{
    use Queueable;

    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {

        return (new MailMessage)
            ->subject("заказ №" . $this->order->id . " завершен")
            ->greeting("Уважемый партнер " . $this->order->partner->name . ",")
            ->line("заказ №" . $this->order->id . " завершен")
            ->line("стоимость заказа: " . $this->order->totalPrice . " руб.")
            ->line("состав заказа:")
            ->line($this->order->allProductsString);

    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

}
