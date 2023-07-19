<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $posts = config('db.cards');
    $headerLinks = config('db.header-links');
    $footerLinks = config('db.footer-links');
    return view('welcome', compact('posts'), compact('headerLinks'), compact('footerLinks'));
})->name('welcome');