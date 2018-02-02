<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@landing')->name('landing');

Route::get('/dashboard', 'HomeController@dashboard')->middleware('auth')->name('dashboard');
Route::get('/referral', 'HomeController@referral')->middleware('auth')->name('referral');
Route::get('/profile', 'HomeController@profile')->middleware('auth')->name('profile');
Route::post('/setwallet', 'HomeController@setwallet')->middleware('auth')->name('setwallet');
Route::get('/buytokens', 'HomeController@buytokens')->middleware('auth')->name('buytokens');


Route::get('/ref/{code}', 'HomeController@ref')->name('ref');

Route::get('setlocale/{locale}', function ($locale) {

    if (in_array($locale, Config::get('app.locales'))) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
    //return redirect()->route('home');

})->name('setlocale');

