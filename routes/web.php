<?php

use Illuminate\Support\Facades\Route;
use App\Portfolio;

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

    return view('index', compact('portfolios'));
});

Route::resource('portfolio','PortfolioController');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');
