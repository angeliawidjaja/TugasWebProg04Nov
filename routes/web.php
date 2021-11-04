<?php

use App\Http\Controllers\ValidationController;
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
    return view('main');
});

Route::get('/login', [ValidationController::class, 'createLoginPage']);

Route::post('/login/checkExistingUser', [ValidationController::class, 'validateLogin']);
 
Route::get('/register', [ValidationController::class, 'createRegisterPage']);

Route::post('/register/addNewUser', [ValidationController::class, 'validateRegister']);
 
Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});
