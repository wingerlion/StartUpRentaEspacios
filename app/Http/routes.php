<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('blog_single', function () {
    return view('blog_single');
});

Route::get('buy', function () {
    return view('buy');
});

Route::get('buy_single', function () {
    return view('buy_single');
});

Route::get('career', function () {
    return view('career');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('dealers', function () {
    return view('dealers');
});

Route::get('faqs', function () {
    return view('faq');
});

Route::get('loan', function () {
    return view('loan');
});

Route::get('loan_single', function () {
    return view('loan_single');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('mobile_app', function () {
    return view('mobile_app');
});


Route::get('privacy', function () {
    return view('privacy');
});


Route::get('register', function () {
    return view('register');
});


Route::get('privacy', function () {
    return view('privacy');
});


Route::get('single', function () {
    return view('single');
});


Route::get('suggestion', function () {
    return view('suggestion');
});


Route::get('terms', function () {
    return view('terms');
});

Route::get('typo', function () {
    return view('typo');
});


Route::get('facebook', 'Auth\AccountFBController@facebook_redirect');
Route::get('callback', 'Auth\AccountFBController@handleProviderCallback');
