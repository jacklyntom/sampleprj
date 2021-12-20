<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jac;

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

// Route::get('/','App\Http\Controllers\jac@index') ;
 


Route::get('/',[jac::class,'index']) ;
Route::post('/insertregister',[jac::class,'store']);
Route::get('/viewdata',[jac::class,'viewdata']);
