<?php

namespace App\Contracts;

interface IQuote
{
    public function __invoke (string $quoteName, $date=null): ?float;

    public function RUB ($currency, $date=null): ?float;
}
