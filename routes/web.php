<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HtmlController;

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


Route::get('/grid', [HtmlController::class,'grid']);
Route::get('/login', [HtmlController::class,'login']);
Route::get('/registration', [HtmlController::class, 'registration']);
Route::post('/register-user', [HtmlController::class,'registerUser']);
Route::post('/login-user', [HtmlController::class,'loginUser']);
Route::get('/dashboard', [HtmlController::class, 'dashboard']);
Route::get('/logout', [HtmlController::class,'logout']);





