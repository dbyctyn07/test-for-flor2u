<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vendor extends Model
{

    use Notifiable;

    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany('App\Product', 'vendor_id');
    }

}
