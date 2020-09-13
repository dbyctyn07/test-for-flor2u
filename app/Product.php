<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = ['id'];

    public function orders()
    {
        return $this->belongsToMany('App\Order', 'order_products', 'product_id', 'order_id');
    }

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct', 'product_id');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Vendor','vendor_id');
    }

}
