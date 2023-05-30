<?php

namespace NadzorServera\Skijasi\Theme\CommerceTheme\Facades;

use Illuminate\Support\Facades\Facade;

class SkijasiCommerceTheme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skijasi-commerce-theme';
    }
}
