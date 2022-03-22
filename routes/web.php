<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\OrdersController;
use App\Http\Controllers\admin\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();



});

Route::prefix('admin')->name('admin.')->group(function (){


    Route::prefix('Category')->name('Category')->group(function (){
        Route::get('/', [CategoryController::class, 'index'])->name('select');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('update');
        // Route::get('store', [CategoryController::class, 'store'])->name('store');
        Route::post('store', [CategoryController::class, 'store'])->name('store');
    });


    });
    Route::prefix('Product')->name('Product')->group(function (){
        Route::get('/', [ProductController::class, 'index'])->name('select');
        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('update');

        Route::get('/edit', function () {
            return redirect('/admin/Product/');
        });


    });

    Route::prefix('orders')->name('orders')->group(function (){
        Route::get('/', [OrdersController::class, 'index'])->name('select');
        Route::get('delete/{id}', [OrdersController::class, 'delete'])->name('delete');
        Route::get('create', [OrdersController::class, 'create'])->name('create');

    });

