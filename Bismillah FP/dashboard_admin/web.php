<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\EventController;
//use App\Http\Controllers\DBJalanKuyController;
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

Route::get('/registform', function () {
    return view('registform');
});
Route::get('/', function () {
    return view('welcome');
});

/*Route::controller(DBJalanKuyController::class)->group(function () {
    Route::get('/database', 'database');
    Route::get('/database/view/{id}', 'view');
    Route::get('/database/tambah', 'regform');
    Route::post('/database/store', 'store');
    Route::get('/database/edit/{id}', 'edit');
    Route::post('/database/update', 'update');
    Route::get('/database/hapus/{id}', 'hapus');
    Route::get('/database/cari', 'cari');
});*/

//controller buat admin
Route::controller(adminController::class)->group(function () {
    Route::get('/template', 'template');
    Route::get('/registform', 'registform');
    Route::get('/database', 'database');
    Route::get('/database/edit/{id}', 'edit');
    Route::get('/database/hapus/{id}', 'hapus');
    Route::get('/database/upload', 'upload');
    Route::post('/upload/proses', 'uploadproses');
    Route::get('/admin/dashboard', 'dashboard_admin');
    Route::get('/admin/dashboard1', 'cobadashboardadmin');
    
    Route::get('/admin/refund-form/{id}', 'refundForm');
    Route::post('/admin/refund-form/upload','uploadRefund');
});

//controller buat user
Route::controller(EventController::class)->group(function () {
    Route::get('discovery', 'discovery');
    Route::get('/detail-event/{id}', 'detailEvent');
});
