<?php

namespace App\Http\Resources;

use App\Contracts\IFormatPrice;
use App\Contracts\IQuote;
use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Product */
class ProductResource extends JsonResource
{
    public function toArray ( $request ): array
    {
        $currency    = strtoupper ( $request->query ( 'currency', 'RUB' ) );
        $formatPrice = app ( IFormatPrice::class );
        $quote       = app ( IQuote::class );

        return [
            'id'    => $this->id,
            'title' => $this->title,
            'price' => $formatPrice( $this->price * $quote->RUB ( $currency ), $currency ),
        ];
    }
}
