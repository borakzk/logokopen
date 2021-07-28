<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('pages.home');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('pricing', function () {
    return view('pages.pricing');
});

Route::get('how-it-works', function () {
    return view('pages.howitworks');
});



Route::get('confirm', function () {
    return view('order.confirm');
});

Route::get('checkout', function () {
    return view('order.checkout');
});

Route::get('complete', function () {
    return view('order.complete');
});

Route::get('download', function () {
    return view('order.download');
});


Route::get('start','App\Http\Controllers\OrderController@formCreate');
Route::post('create','App\Http\Controllers\OrderController@formSave')->name('formSave');