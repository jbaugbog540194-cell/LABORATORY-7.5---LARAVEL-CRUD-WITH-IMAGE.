<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    $products = Schema::hasTable('products') ? Product::latest()->get() : [];

    return view('products.index', compact('products'));
});

Route::resource('products', ProductController::class);
