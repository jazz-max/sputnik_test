<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function prices()
    {
        $products = Product::all();
        return ProductResource::collection($products);
    }
}
