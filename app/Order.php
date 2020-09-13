<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = ['id'];

    public function getTotalPriceAttribute()
    {
        $totalPrice = 0;
        foreach ($this->orderProducts as $orderProduct)
            $totalPrice += $orderProduct->price * $orderProduct->quantity;
        return $totalPrice;
    }

    public function getAllProductsArrAttribute()
    {

        $returnVar = [];

        foreach($this->orderProducts as $orderProduct) {
            $returnVar[] = [
               "id" => $orderProduct->id,
               "name" => $orderProduct->product->name,
               "vendor" => $orderProduct->product->vendor->name,
               "quantity" => $orderProduct->quantity,
               "price_single" => $orderProduct->product->price,
               "price_all" => $orderProduct->product->price * $orderProduct->quantity,
           ];
        }

        return $returnVar;

    }

    public function getAllProductsStringAttribute()
    {

        $returnVar = "";
        foreach($this->allProductsArr as $product)
            $returnVar .= $product['name'] . " (x" . $product['quantity'] . "), ";

        return ($returnVar == "") ? "в заказе отсутствуют продукты." : $returnVar;

    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'order_products', 'order_id', 'product_id');
    }

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct', 'order_id');
    }

    public function partner()
    {
        return $this->belongsTo('App\Partner', 'partner_id');
    }


}
