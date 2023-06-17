<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\EventController;

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

// ini controller admin 
Route::controller(adminController::class)->group(function () {
    Route::get('/template', 'template');
    Route::get('/registform', 'registform');
    Route::get('/database', 'database');
    Route::get('/database/edit/{id}', 'edit');
    Route::get('/database/hapus/{id}', 'hapus');
    Route::get('/database/upload', 'upload');
    Route::post('/upload/proses', 'uploadproses');
    Route::get('/admin', 'dashboard_admin');
    
    Route::get('/admin/refund-form/{id}', 'refundForm');
    Route::post('/admin/refund-form/upload','uploadRefund');
});

// ini controller user
Route::controller(settingsController::class)->group(function () {
    Route::get('/settings/reportbug', 'reportbugform');
    Route::post('/settings/reportbug/success', [settingsController::class, 'store']);
    Route::get('/settings/reportbug/success', 'reportbugsuccess');
    Route::get('/settings', 'settings');
    Route::get('/settings/aboutus', 'aboutus');

});

Route::controller(EventController::class)->group(function () {
    Route::get('discovery', 'discovery');
    Route::get('/detail-event/{id}', 'detailEvent');

    Route::post('/detail-event/upload-review','uploadReview');
    Route::post('/detail-event/upload-bookmark','uploadBookmark');
    Route::post('/detail-event/delete-bookmark','deleteBookmark');
});


Route::get('/dashboardjadicopy', function () {
    return view('dashboardjadicopy');
});

