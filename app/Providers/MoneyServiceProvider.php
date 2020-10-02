<?php

namespace App\Providers;

use Illuminate\Http\Request;
use App\Common\API\Wrappers\Money;
use Illuminate\Support\ServiceProvider;

class MoneyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Money::class, function ($app) {
            /** @var \Illuminate\Http\Request $request */
            $request = app(Request::class);

            return new Money($request->amount ?? 0);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
