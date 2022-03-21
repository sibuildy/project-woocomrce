<?php

namespace App\Http\Controllers\admin;
use Codexshaper\WooCommerce\Facades\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index()
   {
    $limit = 10;
    $Category = Category::all( ['per_page'=>$limit])->all();
    return view('admin.Category.index',['Category'=>$Category]);

   }

   public function create()
   {

    return view('admin.product.create');

   }
   public function edit($id)
   {

    return view('admin.product.edit');

   }

   public function delete($id)
   {
    $options = ['force' => true];
    $category = Category::delete($id, $options);
    return redirect()->back();


   }
}
