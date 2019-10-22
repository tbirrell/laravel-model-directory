<?php

namespace tbirrell\LaravelModelDirectory;

use Illuminate\Support\ServiceProvider;
use tbirrell\LaravelModelDirectory\Console\ModelMakeCommand;

class LaravelModelDirectoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ModelMakeCommand::class,
            ]);
        }
    }
    
    public function register()
    {
        //
    }
}