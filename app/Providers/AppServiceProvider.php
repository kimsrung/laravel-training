<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Form::component('customInput', 'partials.form.components.customInput', ['label', 'name', 'attributes' => [], 'errors' => collect([]), 'value' => null]);
      Form::component('customSelect', 'partials.form.components.customSelect', ['label', 'name', 'choices', 'attributes' => [], 'errors' => collect([]), 'value' => null]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
