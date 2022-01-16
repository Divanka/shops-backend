<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShopResource;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function all()
    {
        $items = Shop::paginate(15);

        return ShopResource::collection($items);
    }

    public function item(Shop $shop)
    {
        return new ShopResource($shop);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
        ]);

        $shop = new Shop($validatedData);
        $shop->save();

        return new ShopResource($shop);
    }

    public function update(Request $request, Shop $shop)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
        ]);

        $shop->fill($validatedData);
        $shop->save();

        return new ShopResource($shop);
    }

    public function delete(Shop $shop)
    {
        $shop->delete();
    }
}
