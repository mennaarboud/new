<?php

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
use App\Http\Controllers\PropertyController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home', function () {
//     return view('home');    
// });

Route::get('/', function () {
    return view('index');    
});

Route::get('/index', function () {
    return view('index');    
});


Route::get('/properties', 'PropertyController@index');
Route::resource('/property', 'PropertyController');


Route::get('/fur_apartments', function () {
    return view('fur_apartments');    
});

Route::get('/contact', function () {
    return view('contact');    
});

Route::get('/apartments', function () {
    return view('apartments');    
});

Route::get('/about', function () {
    return view('about');    
});




// Route::get('/properties', 'PropertyController@create');
// Route::post('/properties', 'PropertyController@store');
// Route::get('/properties/{id}', 'PropertyController@edit');
// Route::post('/properties', 'PropertyController@update');


