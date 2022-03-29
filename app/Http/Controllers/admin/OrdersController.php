<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Codexshaper\WooCommerce\Facades\Order;
use DB;

class OrdersController extends Controller
{


    public function index()
    {
     $limit = 5000;
     $Orders = Order::all();

    foreach($Orders as $order){
        echo($order->meta_data[0]->key);
    }


    }
     public function delete($id)
    {
     $options = ['force' => false];
     $product = Product::delete( $id, $options);


     return redirect()->back()->with('message', 'Bạn đã xoá thành công!');

    }
}
