<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Codexshaper\WooCommerce\Facades\Product;
use DB;

class ProductController extends Controller
{

    public function index()
   {
    $limit = 10;
    $products = Product::all( ['per_page'=>$limit ])->all();
    $products_count = Product::all( ['per_page'=>$limit ])->count();

    return view('admin.product.index',['product'=>$products,'products_count'=>$products_count]);

   }
   public function create()
   {

    return view('admin.product.create');

   }
    public function delete($id)
   {
    $options = ['force' => false];
    $product = Product::delete( $id, $options);


    return redirect()->back()->with('message', 'Bạn đã xoá thành công!');

   }
   public function edit($id)
   {

    return view('admin.product.edit');

   }

}


