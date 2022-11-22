<?php

use Illuminate\Support\Facades\Route;
Route::view('/', 'home'); 
Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name('auth0-callback');
Route::get('/login', 'Auth\Auth0IndexController@login')->name('login');
Route::get('/logout', 'Auth\Auth0IndexController@logout')->name('logout')->middleware('auth');

Route::group(['prefix' => 'dashboard'], function() {
    Route::view('/', 'dashboard/dashboard');
    Route::get('wasteitem/create', 'WasteitemController@create');
    Route::resource('wasteitem', 'WasteitemController')->except('create');
    Route::get('transaction/create', 'TransactionController@create');
    Route::resource('transaction', 'TransactionController')->except('create');
});
