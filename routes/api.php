<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RemainsController;
use App\Http\Controllers\ShopsController;
use Illuminate\Support\Facades\Route;

Route::get('shops', [ShopsController::class, 'all']);
Route::get('shops/{shop}', [ShopsController::class, 'item']);
Route::post('shops/', [ShopsController::class, 'create']);
Route::put('shops/{shop}', [ShopsController::class, 'update']);
Route::delete('shops/{shop}', [ShopsController::class, 'delete']);

Route::get('products/', [ProductsController::class, 'all']);
Route::get('products/{product}', [ProductsController::class, 'item']);
Route::post('products/', [ProductsController::class, 'create']);
Route::put('products/{product}', [ProductsController::class, 'update']);
Route::delete('products/{product}', [ProductsController::class, 'delete']);

Route::get('remains/shops/{shop}', [RemainsController::class, 'shopProducts']);
Route::get('remains/products/{product}', [RemainsController::class, 'productShops']);
