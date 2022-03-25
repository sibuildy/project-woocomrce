<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Codexshaper\WooCommerce\Facades\Order;
use DB;
class ReportController extends Controller
{
    public function ReportAll()
    {
        $orders = Order::all();
        dd($orders);
    }
}
