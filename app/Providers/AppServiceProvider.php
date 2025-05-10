<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Request $request)
    {
        if ($this->app->environment('production')) {
            // Force all generated URLs to use HTTPS
            URL::forceScheme('https');

            // Combine all the X-Forwarded headers that you want to trust
            $trustedHeaders = Request::HEADER_X_FORWARDED_FOR
                            | Request::HEADER_X_FORWARDED_HOST
                            | Request::HEADER_X_FORWARDED_PROTO
                            | Request::HEADER_X_FORWARDED_PORT;

            // Trust the Railway proxy IP and these headers
            $request->setTrustedProxies(
                [$request->getClientIp()],
                $trustedHeaders
            );
        }
    }
}
