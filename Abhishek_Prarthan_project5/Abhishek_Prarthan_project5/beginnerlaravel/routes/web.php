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
	// return Redirect::route('Inicio');
    return view('Inicio');
    // welcome

});
Route::get('/admin_home', function(){
    return view('adminhome');
});
Route::get('/Inicio', function () {
    return view('Inicio');
});
Route::get('/Nosotros', function () {
    return view('nosotros');
});
Route::get('/Equipos', function () {
    return view('Equipos');
});
Route::get('/Contacto', function () {
    return view('Contacto');
});
Route::get('/EventList', function () {
    return view('EventList');
});
Route::get('/EventUser', function () {
    return view('EventUser');
});

Route::get('/ahome', function () {
    return view('ahome');
});
Auth::routes();

// Route::get('/')
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/EventList','EventListController@index')->name('EventList');

Route::get('/registeredEvents','EventUserController@index');
Route::Post('check','EventUserController@check');
Route::Post('update','EventUserController@updateRegisteredEvents');
Route::Post('delete','EventUserController@UnReg');
Route::post('/p','EventUserController@store');


Route::get('/adminevents','AdminController@index')->name('Event Display');
Route::get('/adminhome', 'HomeController@admin')->name('home');
Route::post('/updateEvent','AdminController@updateEvent');
Route::post('/updateEventExtended','AdminController@updateEventExtended');
Route::post('/createEvent','AdminController@store');
Route::post('/delete','AdminController@delete');
Route::get('/viewparticipants','AdminController@viewParticipants');

Route::get('/registerEvent',function(){
    return view('createEvent');
});