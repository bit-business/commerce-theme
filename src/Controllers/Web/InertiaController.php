<?php

namespace NadzorServera\Skijasi\Theme\CommerceTheme\Controllers\Web;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class InertiaController extends Controller
{
    /**
     * General route.
     */
    public function home()
    {
        return Inertia::render('home', [
            'name' => 'Početna',
        ], 'commerce-theme:app');
    }

    public function category()
    {
        return Inertia::render('category', [
            'slug'     => request('slug'),
            'name'     => 'Događanja',
            'sort'     => request('sort'),
            'search'   => request('search'),
            'rating'   => request('rating'),
            'minPrice' => request('minPrice'),
            'maxPrice' => request('maxPrice'),
            'type'     => request('type'),
        ], 'commerce-theme:app');
    }

    public function cart()
    {
        return Inertia::render('cart', [
            'name' => 'Plaćanje',
        ], 'commerce-theme:app');
    }

    public function checkout()
    {
        return Inertia::render('checkout', [
            'name' => 'Plaćanje',
        ], 'commerce-theme:app');
    }

    public function detail($slug)
    {
        return Inertia::render('detail', [
            'slug' => $slug,
            'name' => 'Detalji',
        ], 'commerce-theme:app');
    }

    public function dogadaji($slug)
    {
        return Inertia::render('dogadaji', [
            'slug' => $slug,
            'name' => 'Događaji',
        ], 'commerce-theme:app');
    }

    public function galerija()
    {
        return Inertia::render('galerija', [
     
            'name' => 'Galerija',
        ], 'commerce-theme:app');
    }

    public function kontakt()
    {
        return Inertia::render('kontakt', [
     
            'name' => 'Kontakt',
        ], 'commerce-theme:app');
    }

    public function uclanise()
    {
        return Inertia::render('uclanise', [
     
            'name' => 'Učlani se',
        ], 'commerce-theme:app');
    }

    public function osnovneinformacije()
    {
        return Inertia::render('osnovneinformacije', [
     
            'name' => 'Osnovne Informacije',
        ], 'commerce-theme:app');
    }

    public function interskikongres()
    {
        return Inertia::render('interskikongres', [
            'name' => 'Interski Kongresi',
        ], 'commerce-theme:app');
    }

    public function podrucnizborovi()
    {
        return Inertia::render('podrucnizborovi', [
            'name' => 'Područni zborovi',
        ], 'commerce-theme:app');
    }


    public function productList()
    {
        return Inertia::render('product-list', [
            'name' => 'Lista',
        ], 'commerce-theme:app');
    }

    public function search()
    {
        return Inertia::render('search', [
            'keyword'  => request('keyword'),
            'name'     => 'Pretraživanje',
            'sort'     => request('sort'),
            'search'   => request('search'),
            'rating'   => request('rating'),
            'minPrice' => request('minPrice'),
            'maxPrice' => request('maxPrice'),
            'type'     => request('type'),
        ], 'commerce-theme:app');
    }

    /**
     * Auth route.
     */
    public function authForgotPassword()
    {
        return Inertia::render('auth/forgot-password', [
            'name' => 'Zaboravljena lozinka',
        ], 'commerce-theme:app');
    }

    public function authSendContactForm()
    {
        return Inertia::render('auth/send-contact-form', [
            'name' => 'Kontakt',
        ], 'commerce-theme:app');
    }

    public function authLogin()
    {
        return Inertia::render('auth/login', [
            'name' => 'Prijava',
        ], 'commerce-theme:app');
    }

    public function authRegister()
    {
        return Inertia::render('auth/register', [
            'name' => 'Registracija',
        ], 'commerce-theme:app');
    }

    public function authResetPassword($email, $token)
    {
        return Inertia::render('auth/reset-password', [
            'email' => $email,
            'token' => $token,
            'name'  => 'Resetiranje lozinke',
        ], 'commerce-theme:app');
    }

    public function authVerify($email)
    {
        return Inertia::render('auth/verify', [
            'email' => $email,
            'name'  => 'Provjera',
        ], 'commerce-theme:app');
    }

    /**
     * Profile route.
     */
    public function userProfile()
    {
        return Inertia::render('user/profile', [
            'name' => 'Profil',
        ], 'commerce-theme:app');
    }

    public function userAddress()
    {
        return Inertia::render('user/address', [
            'name' => 'Adresa',
        ], 'commerce-theme:app');
    }

    public function userAddressAdd()
    {
        return Inertia::render('user/address-add', [
            'name' => 'Dodaj adresu',
        ], 'commerce-theme:app');
    }

    public function userAddressEdit($id)
    {
        return Inertia::render('user/address-edit', [
            'id'   => $id,
            'name' => 'Izmijeni Adresu',
        ], 'commerce-theme:app');
    }

    public function userNotification()
    {
        return Inertia::render('user/notification', [
            'name' => 'Obavijesti',
        ], 'commerce-theme:app');
    }

    public function userOrderDetail($id)
    {
        return Inertia::render('user/order-detail', [
            'id'   => $id,
            'name' => 'Detalji plaćanja',
        ], 'commerce-theme:app');
    }

    public function userChangePassword()
    {
        return Inertia::render('user/change-password', [
            'name' => 'Promijeni lozinku',
        ], 'commerce-theme:app');
    }

    public function userOrder()
    {
        return Inertia::render('user/order', [
            'name' => 'Narudžba',
        ], 'commerce-theme:app');
    }

    /**
     * Legal route.
     */
    public function legalPrivacy()
    {
        return Inertia::render('legal/privacy', [
            'name' => 'Politika privatnosti',
        ], 'commerce-theme:app');
    }

    public function legalTos()
    {
        return Inertia::render('legal/tos', [
            'name' => 'Uvjeti korištenja',
        ], 'commerce-theme:app');
    }

    /**
     * Payment route.
     */
    public function paymentInfo($id)
    {
        return Inertia::render('payment/info', [
            'name' => 'Detalji plaćanja',
            'id'   => $id,
        ], 'commerce-theme:app');
    }

    public function paymentConfirm($id)
    {
        return Inertia::render('payment/confirm', [
            'name' => 'Potvrda plaćanja',
            'id'   => $id,
        ], 'commerce-theme:app');
    }

    public function review($id)
    {
        return Inertia::render('user/review', [
            'name' => 'Ocijene',
            'id'   => $id,
        ], 'commerce-theme:app');
    }

    public function HTTP404()
    {
        return Inertia::render('404', [
            'name' => 'Neispravna stranica 404',
        ], 'commerce-theme:app');
    }
}
