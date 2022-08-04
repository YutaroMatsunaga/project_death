<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegistEmployeeController;
use App\Http\Controllers\ListEmployeeController;
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
    return view('welcome');
});

Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/regist-employee', [RegistEmployeeController::class, 'index'])->name('regist-employee');
Route::get('/list-employee', [ListEmployeeController::class, 'index'])->name('list-employee');