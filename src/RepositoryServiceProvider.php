<?php

namespace Skyhwk\Repository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Repository::class, function () {
            return new Repository();
        });
    }

    public function boot()
    {
        if (class_exists('Illuminate\Foundation\AliasLoader')) {
            \Illuminate\Foundation\AliasLoader::getInstance()->alias('Repository', RepositoryFacade::class);
        }
    }
}
