<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(ContactController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::post('/contact','store')->name('contact');
    Route::get('/formation','showFormation')->name('formation');
    Route::get('/rh','showRh')->name('rh');
    Route::get('/finance','showFinance')->name('finance');
    Route::get('/mpme','showMpme')->name('mpme');
    Route::get('/searchFianace','searchFinance')->name('searchFinance');
    Route::get('/divers','others')->name('divers');

});
