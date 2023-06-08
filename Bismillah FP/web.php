<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

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

Route::controller(adminController::class)->group(function () {
    Route::get('/template', 'template');
    Route::get('/registform', 'registform');
    Route::get('/database', 'database');
    Route::get('/database/edit/{id}', 'edit');
    Route::get('/database/hapus/{id}', 'hapus');
    Route::get('/database/upload', 'upload');
    Route::post('/upload/proses', 'uploadproses');
    Route::get('/admin', 'dashboard_admin');
});
