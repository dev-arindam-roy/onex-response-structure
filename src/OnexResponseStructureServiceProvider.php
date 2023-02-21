<?php

namespace Onex\Responsestructure;

use Illuminate\Support\ServiceProvider;
use Onex\Responsestructure\Responsestructure\ResponseStructureClass;

class OnexResponseStructureServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind('responsestructureclass',function(){
            return new ResponseStructureClass();
        });
    }
}
