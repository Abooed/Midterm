<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\my_ticketsController;

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

Route::get('/', [my_ticketsController::class,'index'])->name('index');

Route::get('/create', function () {
    return view('create_my_tickets');
});

Route::post('/create', [my_ticketsController::class,'store'])->name('store');

Route::get('/name-form', function () {
    return view('name-form');
});
