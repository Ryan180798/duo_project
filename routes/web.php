<?php

use Illuminate\Support\Facades\Route;
use App\Services;
use App\Contact;
use App\Subscribe;
use App\Testimonials;

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

    $services=Services::all();
    $contact=Contact::find(1);
    $subscribe=Subscribe::find(1);
    $testimonials=Testimonials::all();

    return view('index',compact('services','contact','subscribe','testimonials'));
})->name('index');


Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::resource('/admin/services','ServicesController');

Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::get('/admin/contact', 'ContactController@index')->name('contact.index');

Route::get('/admin/subscribe', 'SubscribeController@edit')->name('subscribe');
Route::post('/admin/subscribe/update','SubscribeController@update')->name('subscribe.update');

Route::resource('/admin/testimonials','TestimonialsController');
