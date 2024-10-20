<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});



Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});


route::get('/auth/google/callback', function () {
    dd('http://127.0.0.1:8000/auth/google/callback');
});


require __DIR__.'/auth.php';
