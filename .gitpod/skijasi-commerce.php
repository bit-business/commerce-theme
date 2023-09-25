<?php

return [
    /*
     * This array of class will be registered as payment gateway
     * to the commerce module when this application is started.
     */
    'payments' => ['NadzorServera\Skijasi\Module\Commerce\SkijasiCommerceModule'],
    /**
     * Override the controllers
     */
    'controllers' => [],
];
