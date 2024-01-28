<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $menu_db = config('menudb');
    $fumetti_db = config('fumettidb');
    $banner_db = config('bannerdb');
    $footer_db = config('footerdb');
    $icon_db = config('icondb');
    return view('main', compact('menu_db', 'fumetti_db', 'banner_db', 'footer_db', 'icon_db'));
});