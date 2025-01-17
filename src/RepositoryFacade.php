<?php

namespace Skyhwk\Repository;

use Illuminate\Support\Facades\Facade;

class RepositoryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Repository::class;
    }
}
