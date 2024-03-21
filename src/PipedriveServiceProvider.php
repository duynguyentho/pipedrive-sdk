<?php
namespace Davenguyen\Pipedrive;

use Illuminate\Support\ServiceProvider;


class PipedriveServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/custom.php');
        $this->mergeConfigFrom(__DIR__.'/config/services.php', 'services');
    }
}