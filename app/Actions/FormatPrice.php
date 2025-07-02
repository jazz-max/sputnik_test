<?php

namespace App\Actions;

use App\Contracts\IFormatPrice;

class FormatPrice implements IFormatPrice
{
    public function __invoke ( float $price, string $currency ): string
    {
        return match ( $currency )
        {
            'USD'   => '$' . number_format ( $price, 2, '.', ' ' ),
            'EUR'   => '€' . number_format ( $price, 2, '.', ' ' ),
            'RUB'   => number_format ( $price, 2, '.', ' ' ) . ' ₽',
            default => number_format ( $price, 2, '.', ' ' ),
        };
    }
}
