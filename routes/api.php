<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::get ( '/prices', [ ProductController::class, 'prices' ] );
