<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductPriceController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return ProductResource::collection($products);
    }
}
