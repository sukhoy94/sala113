<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function () {
        Route::get('/', function () {
            return view('visuals');
        })->name('visuals');

        Route::get('/about', function () {
            return view('about');
        })->name('about');

        Route::get('/equipment', function () {
            return view('equipment');
        })->name('equipment');

        Route::get('/pricing', function () {
            return view('pricing');
        })->name('pricing');

        Route::get('/rules', function () {
            return view('rules');
        })->name('rules');
    }
);
