<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Portfolio;
use App\Header;
use App\About;
use App\Team;
=======
use App\Services;
use App\Contact;
use App\Subscribe;
use App\Testimonials;
>>>>>>> 6ccd2e3b452d67d43c42bd11976326aea561cc2a

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
<<<<<<< HEAD
    $portfolios = Portfolio::all();
    $teams = Team::all();
    $header = Header::find(1);
    $about = About::find(1);

    return view('index', compact('portfolios','header','about','teams'));
=======

    $services=Services::all();
    $contact=Contact::find(1);
    $subscribe=Subscribe::find(1);
    $testimonials=Testimonials::all();

    return view('index',compact('services','contact','subscribe','testimonials'));
>>>>>>> 6ccd2e3b452d67d43c42bd11976326aea561cc2a
})->name('index');


Route::get('/admin', function () {
    $contacts=Contact::all();
    $testimonials=Testimonials::all();
    return view('admin.index',compact('contacts','testimonials'));
})->name('admin');

<<<<<<< HEAD
Route::get('/admin/header', 'HeaderController@edit')->name('header');

Route::post('/admin/header/update','HeaderController@update')->name('header.update');

Route::get('/admin/about','AboutController@edit')->name('about');

Route::post('/admin/about/update','AboutController@update')->name('about.update');

Route::resource('portfolio','PortfolioController');

Route::resource('team','TeamController');
=======
Route::resource('/admin/services','ServicesController');

Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::get('/admin/contact', 'ContactController@index')->name('contact.index');

Route::get('/admin/subscribe', 'SubscribeController@edit')->name('subscribe');
Route::post('/admin/subscribe/update','SubscribeController@update')->name('subscribe.update');

Route::resource('/admin/testimonials','TestimonialsController');
>>>>>>> 6ccd2e3b452d67d43c42bd11976326aea561cc2a
