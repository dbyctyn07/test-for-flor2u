<?php

namespace App\Console\Commands;

use App\Notifications\UnconfirmedOrdersCancelPartner;
use App\Order;
use App\Partner;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class UnconfirmedOrdersCancel extends Command
{

    protected $signature = 'orders:cancel';
    protected $description = 'Cancel unconfirmed yesterday orders';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

        $partnersIds = Order::where('status', 0)->whereDate('created_at', '=', date( "Ymd", strtotime( "-1 days" ) ))->get()->groupBy('partner.id')->keys()->all();

        foreach ($partnersIds as $id) {
            $partner = Partner::find($id);
            $unconfirmedOrders = Order::where('partner_id', $id)->whereDate('created_at', '=', date( "Ymd", strtotime( "-1 days" ) ))->where('status', 0)->get();
            Notification::send($partner, new UnconfirmedOrdersCancelPartner($partner, $unconfirmedOrders));
            $unconfirmedOrders->update(['status' => 30]);
        }

    }

}
