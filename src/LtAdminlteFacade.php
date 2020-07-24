<?php

namespace LaravelTemplate\LtAdminlte;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelTemplate\LtAdminlte\Skeleton\SkeletonClass
 */
class LtAdminlteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lt-adminlte';
    }
}
