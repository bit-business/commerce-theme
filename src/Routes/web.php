<?php

use Illuminate\Support\Facades\Route;
use NadzorServera\Skijasi\Theme\CommerceTheme\Helpers\Route as HelpersRoute;
use NadzorServera\Skijasi\Theme\CommerceTheme\Middlewares\HandleInertiaRequests;

$commerce_route_prefix = config('skijasi-commerce-theme.theme_prefix');
Route::prefix($commerce_route_prefix)
    ->as('skijasi.commerce-theme.')
    ->middleware(['web', HandleInertiaRequests::class])
    ->group(function () {

        /**
         * General route.
         */
        Route::get('/', HelpersRoute::getController('InertiaController@home'))->name('home');
        Route::get('/kategorija/{slug}', HelpersRoute::getController('InertiaController@kategorija'))->name('kategorija');
        Route::get('/cart', HelpersRoute::getController('InertiaController@cart'))->name('cart');
        Route::get('/checkout', HelpersRoute::getController('InertiaController@checkout'))->name('checkout');
        Route::get('/detalji/{slug}', HelpersRoute::getController('InertiaController@detalji'))->name('detalji');
        Route::get('/dogadaji/{slug}', HelpersRoute::getController('InertiaController@dogadaji'))->name('dogadaji');
        Route::get('/galerija', HelpersRoute::getController('InertiaController@galerija'))->name('galerija');
        Route::get('/kontakt', HelpersRoute::getController('InertiaController@kontakt'))->name('kontakt');
        Route::get('/uclanise', HelpersRoute::getController('InertiaController@uclanise'))->name('uclanise');
        Route::get('/osnovneinformacije', HelpersRoute::getController('InertiaController@osnovneinformacije'))->name('osnovneinformacije');
        Route::get('/nasiclanovi', HelpersRoute::getController('InertiaController@nasiclanovi'))->name('nasiclanovi');
      
        Route::get('/politikakolacica', HelpersRoute::getController('InertiaController@politikakolacica'))->name('politikakolacica');
        Route::get('/politikaprivatnosti', HelpersRoute::getController('InertiaController@politikaprivatnosti'))->name('politikaprivatnosti');

        Route::get('/popustizaclanove', HelpersRoute::getController('InertiaController@popustizaclanove'))->name('popustizaclanove');
        Route::get('/savjetizaclanove', HelpersRoute::getController('InertiaController@savjetizaclanove'))->name('savjetizaclanove');
        Route::get('/dokumenti', HelpersRoute::getController('InertiaController@dokumenti'))->name('dokumenti');


        Route::get('/podrucnizborovi', HelpersRoute::getController('InertiaController@podrucnizborovi'))->name('podrucnizborovi');
        Route::get('/infoclanarine', HelpersRoute::getController('InertiaController@infoclanarine'))->name('infoclanarine');
        Route::get('/interskikongres', HelpersRoute::getController('InertiaController@interskikongres'))->name('interskikongres');
        Route::get('/list', HelpersRoute::getController('InertiaController@productList'))->name('product-list');
        Route::get('/search', HelpersRoute::getController('InertiaController@search'))->name('search');

        Route::get('/arhivavijesti', HelpersRoute::getController('InertiaController@arhivavijesti'))->name('arhivavijesti');
        Route::get('/djelatnostihzutsa', HelpersRoute::getController('InertiaController@djelatnostihzutsa'))->name('djelatnostihzutsa');
        Route::get('/izradaiskaznice', HelpersRoute::getController('InertiaController@izradaiskaznice'))->name('izradaiskaznice');
        Route::get('/prijavazaclanstvo', HelpersRoute::getController('InertiaController@prijavazaclanstvo'))->name('prijavazaclanstvo');


        /**
         * Auth route.
         */
        Route::get('/auth/loginweb', HelpersRoute::getController('InertiaController@authLoginWeb'))->name('loginweb');
        Route::get('/auth/login', HelpersRoute::getController('InertiaController@authLogin'))->name('login');
        Route::get('/auth/register', HelpersRoute::getController('InertiaController@authRegister'))->name('register');
        Route::get('/auth/reset-password/{email}/{token}', HelpersRoute::getController('InertiaController@authResetPassword'))->name('reset-password');
        Route::get('/auth/forgot-password/{email?}', HelpersRoute::getController('InertiaController@authForgotPassword'))->name('forgot-password');
        Route::get('/auth/verify/{email}', HelpersRoute::getController('InertiaController@authVerify'))->name('verification');

        //obrisat ovo ispod mozda? provjerit da li radi bez za forme
           Route::get('/auth/send-contact-form/{email?}', HelpersRoute::getController('InertiaController@authSendContactForm'))->name('send-contact-form');

        /**
         * My profile route.
         */
        Route::get('/profile', HelpersRoute::getController('InertiaController@userProfile'))->name('profile');
        Route::get('/profile/notification', HelpersRoute::getController('InertiaController@userNotification'))->name('notification');
        Route::get('/profile/address', HelpersRoute::getController('InertiaController@userAddress'))->name('address');
        Route::get('/profile/password/change', HelpersRoute::getController('InertiaController@userChangePassword'))->name('change-password');
        Route::get('/profile/order', HelpersRoute::getController('InertiaController@userOrder'))->name('order');
        Route::get('/profile/order/{id}', HelpersRoute::getController('InertiaController@userOrderDetail'))->name('order-detail');
        Route::get('/profile/address/add', HelpersRoute::getController('InertiaController@userAddressAdd'))->name('address-add');
        Route::get('/profile/address/edit/{id}', HelpersRoute::getController('InertiaController@userAddressEdit'))->name('address-edit');

        Route::get('/profile/zaduzenja', HelpersRoute::getController('InertiaController@Zaduzenja'))->name('zaduzenja');
        Route::get('/profile/mojstatus', HelpersRoute::getController('InertiaController@Mojstatus'))->name('mojstatus');
        /**
         * Legal route.
         */
        Route::get('/legal/tos', HelpersRoute::getController('InertiaController@legalTos'))->name('tos');
        Route::get('/legal/privacy', HelpersRoute::getController('InertiaController@legalPrivacy'))->name('privacy');

        /**
         * Payment route.
         */
        Route::get('/payment/{id}/info', HelpersRoute::getController('InertiaController@paymentInfo'))->name('payment-info');
        Route::get('/payment/{id}/confirm', HelpersRoute::getController('InertiaController@paymentConfirm'))->name('payment-confirm');
        Route::get('/review/{id}', HelpersRoute::getController('InertiaController@review'))->name('review');

        Route::fallback(HelpersRoute::getController('InertiaController@HTTP404'));
    });
