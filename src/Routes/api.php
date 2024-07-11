<?php

use Illuminate\Support\Facades\Route;
use NadzorServera\Skijasi\Middleware\ApiRequest;
use NadzorServera\Skijasi\Middleware\SkijasiAuthenticate;
use NadzorServera\Skijasi\Middleware\SkijasiCheckPermissions;
use NadzorServera\Skijasi\Theme\CommerceTheme\Helpers\Route as HelpersRoute;

use NadzorServera\Skijasi\Theme\CommerceTheme\Controllers\ConfigurationController;

$api_route_prefix = \config('skijasi.api_route_prefix');

Route::group(['prefix' => $api_route_prefix, 'as' => 'skijasi.', 'middleware' => [ApiRequest::class]], function () {
    Route::group(['prefix' => 'theme/commerce-theme/v1'], function () {
        Route::group(['prefix' => 'configurations', 'middleware' => [SkijasiAuthenticate::class]], function () {
            Route::put('/edit', HelpersRoute::getApiController('ConfigurationController@edit'))->middleware(SkijasiCheckPermissions::class.':edit_configurations');
            Route::put('/edit-multiple', HelpersRoute::getApiController('ConfigurationController@editMultiple'))->middleware(SkijasiCheckPermissions::class.':edit_configurations');
            Route::post('/add', HelpersRoute::getApiController('ConfigurationController@add'))->middleware(SkijasiCheckPermissions::class.':add_configurations');
            Route::delete('/delete', HelpersRoute::getApiController('ConfigurationController@delete'))->middleware(SkijasiCheckPermissions::class.':delete_configurations');
        });

        Route::group(['prefix' => 'configurations'], function () {
            Route::get('/', HelpersRoute::getApiController('ConfigurationController@browse'));
            Route::get('/read', HelpersRoute::getApiController('ConfigurationController@read'));
        });



  

        Route::get('/forms/{formId}/fields', [ConfigurationController::class, 'getFormFields']);
        Route::get('/users/{userId}', [ConfigurationController::class, 'getUserData']);
        Route::post('/forms/{formId}/entries', [ConfigurationController::class, 'saveFormEntry']);



        Route::post('/forms', [ConfigurationController::class, 'saveForm']);

        Route::get('/forms', [ConfigurationController::class, 'browseForms']);
        Route::get('/forms/{formId}', [ConfigurationController::class, 'readForm']);
        Route::put('/forms/{formId}', [ConfigurationController::class, 'updateForm']);

        Route::post('/forms/{formId}/entries', [ConfigurationController::class, 'saveFormEntry']);
        Route::get('/users/{userId}', [ConfigurationController::class, 'getUserData']);

        

    });
});
