<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Partner extends Model
{

    use Notifiable;

    protected $guarded = ['id'];

    public function orders()
    {
        return $this->hasMany('App\Order', 'partner_id');
    }

}
