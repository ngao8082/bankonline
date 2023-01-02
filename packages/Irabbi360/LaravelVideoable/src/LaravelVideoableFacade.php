<?php

namespace Irabbi360\LaravelVideoable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Irabbi360\LaravelVideoable\Skeleton\SkeletonClass
 */
class LaravelVideoableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-videoable';
    }
}
