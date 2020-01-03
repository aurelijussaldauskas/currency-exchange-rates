<?php

namespace aurelijussaldauskas\currencyExchangeRates;

use Illuminate\Support\ServiceProvider;

class CurrencyRateServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/currency_rates.php' => config_path('currency_rates.php'),
        ], 'currency-exchange-rates-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/currency_rates.php', 'currency_rates');
    }
}
