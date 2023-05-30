<?php

namespace NadzorServera\Skijasi\Theme\CommerceTheme\Helpers;

class Route
{
    public static function getController($key)
    {
        // get config 'controllers' from config/skijasi-commerce.php
        $controllers = config('skijasi-commerce-theme.controllers.web');

        // if the key is not found, return $key
        if (!isset($controllers[$key])) {
            return 'NadzorServera\\Skijasi\\Theme\\CommerceTheme\\Controllers\\Web\\'.$key;
        }

        // return the value of the key
        return $controllers[$key];
    }

    public static function getApiController($key)
    {
        // get config 'controllers' from config/skijasi-commerce.php
        $controllers = config('skijasi-commerce-theme.controllers.api');

        // if the key is not found, return $key
        if (!isset($controllers[$key])) {
            return 'NadzorServera\\Skijasi\\Theme\\CommerceTheme\\Controllers\\'.$key;
        }

        // return the value of the key
        return $controllers[$key];
    }
}
