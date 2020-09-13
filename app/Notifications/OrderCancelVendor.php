<?php

namespace App\Notifications;

use App\Order;
use App\OrderProduct;
use App\Partner;
use App\Product;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderCancelVendor extends Notification implements ShouldQueue
{
    use Queueable;

    protected $orderProduct;

    public function __construct(OrderProduct $orderProduct)
    {
        $this->orderProduct = $orderProduct;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {

        return (new MailMessage)
            ->subject("заказ №" . $this->orderProduct->order->id . " завершен")
            ->greeting("Уважемый поставщик " . $this->orderProduct->product->vendor->name . ",")
            ->line("заказ №" . $this->orderProduct->order->id . " завершен")
            ->line("стоимость заказа: " . $this->orderProduct->order->totalPrice . " руб.")
            ->line("состав заказа:")
            ->line( $this->orderProduct->order->allProductsString);

    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

}
