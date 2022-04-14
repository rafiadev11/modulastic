<?php

namespace Rafiadev11\Modulastic;

use Illuminate\Support\ServiceProvider;
use Rafiadev11\Modulastic\Commands\DefaultModuleStructure;

class ModulasticServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                DefaultModuleStructure::class,
            ]);
        }
    }

    public function register()
    {
    }

}
