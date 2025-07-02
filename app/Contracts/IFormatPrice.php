<?php

namespace App\Contracts;


interface IFormatPrice
{
    public function __invoke ( float $price, string $currency ): string;
}
