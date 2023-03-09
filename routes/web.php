<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\employee;
use App\Models\department;
use App\Models\job_title;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
  });
Route::get('/', [UserController::class,'getAllUsers']);

Route::get('/user', function () {
    return view('user');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/typography', function () {
    return view('typography');
});
Route::get('/notifications', function () {
    return view('notifications');
});
Route::get('/maps', function () {
    return view('maps');
});
Route::get('/icons', function () {
    return view('icons');
});


