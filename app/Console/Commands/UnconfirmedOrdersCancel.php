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

        $partnersIds = Order::yesterdayNew()->get()->groupBy('partner.id')->keys()->all();

        foreach ($partnersIds as $id) {
            $partner = Partner::find($id);
            $unconfirmedOrders = Order::where('partner_id', $id)->yesterdayNew()->get();
            Notification::send($partner, new UnconfirmedOrdersCancelPartner($partner, $unconfirmedOrders));
            $unconfirmedOrders->update(['status' => 30]);
        }

    }

}
