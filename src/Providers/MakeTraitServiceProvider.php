<?php

namespace Mtownsend\MakeTrait\Providers;

use Illuminate\Support\ServiceProvider;
use Mtownsend\MakeTrait\Console\Commands\TraitMakeCommand;

class MakeTraitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            TraitMakeCommand::class
        ]);
    }
}
