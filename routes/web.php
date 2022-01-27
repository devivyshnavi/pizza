<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\first;
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
    return view('welcome');});
Route::get('/register',[first::class,'register']);
Route::post('/save',[first::class,'postregister']);
Route::get('/login',[first::class,'loginpage']);
Route::post('/home',[first::class,'login']);
Route::get('/menu',[first::class,'menu']);
Route::get('/addcart/{id}',[first::class,'addcart']);
Route::post('/intocart',[first::class,'intocart']);
Route::get('/cartdisp',[first::class,'cartdisp']);
Route::get('/delcart/{id}',[first::class,'delcart']);
Route::get('/checkout/{tot}',[first::class,'checkout']);
Route::post('/payment',[first::class,'payment']);
Route::get('/success',[first::class,'success']);
Route::get('/edit/{id}',[first::class,'profile']);
Route::post('/update',[first::class,'updated']);
Route::get('/logout',[first::class,'logout']);