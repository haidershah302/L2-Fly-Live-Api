<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {

    $data = User::all();

    dd($data);

//    return redirect('/auth/google/redirect');
});



Route::get('/auth/google/redirect', function (Request $request) {
    return Socialite::driver('google')->redirect();
});


route::get('/auth/google/callback', function (Request $request) {
    dd(Socialite::driver('google')->user(), 'this is fresh push');
});

require __DIR__.'/auth.php';
