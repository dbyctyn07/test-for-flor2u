<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddOrderProductRequest;
use App\Order;
use App\OrderProduct;
use App\Product;
use Illuminate\Http\Request;

class OrderProductController extends Controller
{

    public function destroy(Request $request)
    {
        $orderProduct = OrderProduct::findOrFail($request->opid);
        $order = $orderProduct->order;
        $orderProduct->delete();
        return response()->json(["mainData" => $order->allProductsArr, "totalPrice" => $order->totalPrice]);
    }

    public function add(AddOrderProductRequest $request)
    {
        $order = Order::findOrFail($request->order_id);
        $price = Product::findOrFail($request->product_id)->price;

        $new = OrderProduct::create([
            'order_id' => $order->id,
            'quantity' => $request->quantity,
            'price' => $price,
            'product_id' => $request->product_id
        ]);

        return response()->json(["mainData" => $order->allProductsArr, "totalPrice" => $order->totalPrice]);
    }

}
