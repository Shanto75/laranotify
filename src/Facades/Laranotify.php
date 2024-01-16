<?php

namespace Shanto75\Laranotify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shanto75\Laranotify\Laranotify
 */
class Laranotify extends Facade
{
     /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'Laranotify';
    }
}