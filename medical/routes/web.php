<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/user/{id}', function ($id) {
//    return $id;
//})->where('id', '[A-Za-z]+');
//
//Route::get('/user/{id}', function ($id) {
//    return $id;
//})->where('id', '[0-9]+');
//
//Route::get('/user/student/course/attend/register', function ($id) {
//    return $id;
//})->name('students');
//
//Route::prefix('dashboard')->middleware('auth')->group(function () {
//
//    Route::get('/main', function () {
//        return 'Welcome Admin';
//    });
//
//    Route::get('/users.module', function () {
//        return 'Welcome users module';
//    });
//});

Route::get('/', [ThemeController::class, 'home_page']);
