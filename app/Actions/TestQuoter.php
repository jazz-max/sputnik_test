<?php

namespace App\Actions;

use App\Contracts\IQuote;

class TestQuoter implements IQuote
{

    public function RUB ( $currency, $date=null ): ?float
    {
        if ( $currency == "RUB" )
        {
            return 1;
        }

        return $this->__invoke ( 'RUB'. $currency, $date=null );
    }

    public function __invoke ( string $quoteName, $date=null ): ?float
    {
        return match ( $quoteName )
        {
            'RUBUSD'   => 1 / 90,
            'RUBEUR'   => 1 / 100,
            'RUBRUB'   => 1,
            default => null,
        };
    }

}
