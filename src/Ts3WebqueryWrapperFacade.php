<?php

namespace Justinrijsdijk\Ts3WebqueryWrapper;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Justinrijsdijk\Ts3WebqueryWrapper\Skeleton\SkeletonClass
 */
class Ts3WebqueryWrapperFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ts3-webquery-wrapper';
    }
}
