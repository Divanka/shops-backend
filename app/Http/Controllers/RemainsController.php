<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Http\Resources\ShopResource;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class RemainsController extends Controller
{
    public function shopProducts(Shop $shop)
    {
        $products = $shop->products()->paginate(15);

        return ProductResource::collection($products);
    }

    public function productShops(Product $product)
    {
        $shops = $product->shops()->paginate(15);

        return ShopResource::collection($shops);
    }
}
