<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customer;

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

Route::get('/insert',[customer::class,'insert']);
Route::post('/insert',[customer::class,'inserthelp']);

Route::get('/view',[customer::class,'view']);

Route::get('/delete/{id}',[customer::class,'delete']);

Route::get('/update/{id}',[customer::class,'update']);

Route::post('/update',[customer::class,'updatehelp']);
