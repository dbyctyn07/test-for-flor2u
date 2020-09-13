<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateOrderRequest;
use App\Notifications\OrderCancelPartner;
use App\Notifications\OrderCancelVendor;
use App\Order;
use App\Partner;
use App\Product;
use Illuminate\Support\Facades\Notification;


class OrderController extends Controller
{

    protected static $statusTypes = [
        "0" => "новый (0)",
        "10" => "подтвержден (10)",
        "20" => "завершен (20)",
        "30" => "отменен (30)",
    ];

    public function index()
    {
        $orders = Order::orderBy('updated_at', 'desc')->with(['partner', 'orderProducts.product.vendor'])->paginate(100);
        $statusTypes = [
            "0" => "новый",
            "10" => "подтвержден",
            "20" => "завершен",
            "30" => "отменен",
        ];
        return view("admin.order.index", [
            'orders' => $orders,
            'statusTypes' => self::$statusTypes,
        ]);
    }

    public function edit(Order $order)
    {
        $partners = Partner::orderBy('name', 'asc')->get();
        $products = Product::orderBy('created_at', 'asc')->get();
        return view("admin.order.edit", [
            'order' => $order,
            'statusTypes' => self::$statusTypes,
            'partners' => $partners,
            'products' => $products,
        ]);
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {

        if ($request->status == 20) {
            Notification::send($order->partner, new OrderCancelPartner($order));
            foreach ($order->orderProducts as $orderProduct)
                Notification::send($orderProduct->product->vendor, new OrderCancelVendor($orderProduct));
        }

        $order->update([
            "client_email" => $request->client_email,
            "partner_id" => $request->partner_id,
            "status" => $request->status,
        ]);
        session()->flash("flashMessage", "Order was successfully updated");
        session()->flash("flashType", "success");

        return redirect(route('admin.order.index'));

    }

}
