<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function all()
    {
        $items = Product::paginate(15);

        return ProductResource::collection($items);
    }

    public function item(Product $product)
    {
        return new ProductResource($product);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric'],
        ]);

        $product = new Product($validatedData);
        $product->save();

        return new ProductResource($product);
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric'],
        ]);

        $product->fill($validatedData);
        $product->save();

        return new ProductResource($product);
    }

    public function delete(Product $product)
    {
        $product->delete();
    }
}
