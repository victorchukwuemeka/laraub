<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


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
    public function boot(): void
    {
        Validator::extend('valid_email_domain', function($attribute, $value, $parameters, $validator) {
            $domain = substr(strrchr($value, "@"), 1);
            return $domain && checkdnsrr($domain, 'MX');
        });

        Validator::replacer('valid_email_domain', function($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'The :attribute must have a valid email domain.');
        });
    }
}
