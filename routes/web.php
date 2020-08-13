<?php

use Illuminate\Support\Facades\Route;
use App\Subject;

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
    $subjects = Subject::get();
    //dd($subjects);

    return view('welcome',["subjects" => $subjects]);
});

Route::get('/send-mail', 'SendMailController@sendMail');
Route::post('/send-mail', 'SendMailController@sendMail');

Route::resource('/mensajes', 'MensajeController');
