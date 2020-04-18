<?php

use Illuminate\Support\Facades\Route;
use App\Portfolio;
use App\Header;

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
    $portfolios = Portfolio::all();
    $header = Header::all();

    return view('index', compact('portfolios','header'));
})->name('index');


Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::get('/admin/header', 'HeaderController@edit')->name('header');

Route::post('/admin/header/update','HeaderController@update')->name('header.update');

Route::resource('portfolio','PortfolioController');
