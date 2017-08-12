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

Route::get('/', function () {
    return view('welcome');
});






Route::get('/kantin/{r}/{q}/{p?}', function ($r,$q,$p='keripik') {
	return '<h1><i><u>welcome</u></i></h1><br>'
.'saya makan '.$r.'<br>'
.'saya minum '.$q.'<br>'
.'saya makan cemilan '.$p ;
	});
