<?php

namespace App\Providers;

use App\Actions\FormatPrice;
use App\Actions\TestQuoter;
use App\Contracts\IFormatPrice;
use App\Contracts\IQuote;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register (): void
    {
        app ()->singleton ( IQuote::class, TestQuoter::class );
        app ()->singleton ( IFormatPrice::class, FormatPrice::class );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot (): void
    {
        //
    }
}
