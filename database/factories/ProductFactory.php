<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition (): array
    {
        return [
            'title'      => $this->faker->words (3, true) ,
            'price'      => $this->faker->randomNumber ( 6 ) / 100 ,
            'created_at' => Carbon::now (),
            'updated_at' => Carbon::now (),
        ];
    }
}
