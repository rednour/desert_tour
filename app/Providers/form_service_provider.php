<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class form_service_provider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Form::component(
            'bsText','partials.form.text',['name','value','attributes']
        );
    }
}
