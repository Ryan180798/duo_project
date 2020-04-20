<?php

use Illuminate\Support\Facades\Route;
use App\Portfolio;
use App\Header;
use App\About;
use App\Team;
use App\Services;
use App\Contact;
use App\Subscribe;
use App\Testimonials;
use App\Contact2;


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

    // return view('index', compact('portfolios','header','about','teams'));

    $services=Services::all();
    $contact=Contact::find(1);
    $contact2=Contact2::find(1);
    $subscribe=Subscribe::find(1);
    $testimonials=Testimonials::all();

    return view('index',compact('services','contact','subscribe','testimonials','portfolios','header','about','teams','contact2'));
})->name('index');


Route::get('/admin', function () {
    $contacts=Contact::all();
    $testimonials=Testimonials::all();
    $portfolios = Portfolio::all();
    $teams = Team::all();
    return view('admin.index',compact('contacts','testimonials','portfolios','teams'));
})->name('admin');

Route::get('/admin/header', 'HeaderController@edit')->name('header');

Route::post('/admin/header/update','HeaderController@update')->name('header.update');

Route::get('/admin/about','AboutController@edit')->name('about');

Route::post('/admin/about/update','AboutController@update')->name('about.update');

Route::resource('portfolio','PortfolioController');

Route::resource('team','TeamController');

Route::resource('/admin/services','ServicesController');

Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::get('/admin/contact', 'ContactController@index')->name('contact.index');
Route::delete('/admin/contact/{id}', 'ContactController@destroy')->name('contact.destroy');

Route::get('/admin/subscribe', 'SubscribeController@edit')->name('subscribe');
Route::post('/admin/subscribe/update','SubscribeController@update')->name('subscribe.update');

Route::resource('/admin/testimonials','TestimonialsController');

Route::get('/admin/contact2', 'Contact2Controller@edit')->name('contact2');
Route::post('/admin/contact2/update','Contact2Controller@update')->name('contact2.update');

