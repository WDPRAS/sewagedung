<?php

use App\Http\Middleware\HakAkses;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\gedungController;
use App\Http\Controllers\bookingController;


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


Route::get('/', [gedungController::class, 'index'])->name('home');


Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/loginya', [loginController::class, 'loginya'])->name('loginya');

Route::get('/register', [loginController::class, 'register'])->name('register');
Route::post('/registeruser', [loginController::class, 'registeruser'])->name('registeruser');


Route::group(['middleware' => ['auth', 'hakakses:admin']], function () {
    Route::get('/booking', [bookingController::class, 'booking']);
    Route::get('/ambildatabooking/{id}', [bookingController::class, 'ambildatabooking']);
    Route::post('/updatedatabooking/{id}', [bookingController::class, 'updatedatabooking'])->name('updatedatabooking');

    Route::get('/gedung', [gedungController::class, 'tambahgedung'])->name('gedung');
    Route::post('/insertdata', [gedungController::class, 'insertdata'])->name('insertdata');

    Route::get('/ambildata/{id}', [gedungController::class, 'ambildata'])->name('ambildata');
    Route::post('/updatedata/{id}', [gedungController::class, 'updatedata'])->name('updatedata');

    Route::get('/delete/{id}', [gedungController::class, 'delete'])->name('delete');
});
Route::group(
    ['middleware' => ['auth', 'hakakses:user']],
    function () {
        Route::get('/tambahboooking/{id}', [bookingController::class, 'create']);
        Route::post('/insertdatabooking', [bookingController::class, 'store'])->name('insertdatabooking');
    }
);

Route::group(
    ['middleware' => ['auth', 'hakakses:admin,user']],
    function () {
        Route::get('/tambahboooking/{id}', [bookingController::class, 'create']);
        Route::post('/insertdatabooking', [bookingController::class, 'store'])->name('insertdatabooking');
    }
);

Route::get('/logout', [loginController::class, 'logout'])->name('logout');
