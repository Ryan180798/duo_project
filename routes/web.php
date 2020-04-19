<?php

use Illuminate\Support\Facades\Route;
use App\Portfolio;
use App\Header;
use App\About;
use App\Team;

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
    $teams = Team::all();
    $header = Header::find(1);
    $about = About::find(1);

    return view('index', compact('portfolios','header','about','teams'));
})->name('index');


Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::get('/admin/header', 'HeaderController@edit')->name('header');

Route::post('/admin/header/update','HeaderController@update')->name('header.update');

Route::get('/admin/about','AboutController@edit')->name('about');

Route::post('/admin/about/update','AboutController@update')->name('about.update');

Route::resource('portfolio','PortfolioController');

Route::resource('team','TeamController');
