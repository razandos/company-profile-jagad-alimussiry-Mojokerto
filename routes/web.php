<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BimbelController;
use App\Http\Controllers\IstigosahController;
use App\Http\Controllers\KomunitiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\KonsultasiController;

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\jamediaController;

use App\Http\Controllers\SlideController;
use App\Http\Controllers\ScienceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//login
Route::get('/dashboards-login-jagad-ali-mussiry', [AuthController::class, 'login'])->name('login');
Route::post('/dashboards-login-jagad-ali-mussiry', [AuthController::class, 'authenticated']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboards', [DashboardController::class, 'index'])->middleware('auth')->name('admin.index');

//Home

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/bimbel', [HomeController::class, 'bimbel1']);
Route::get('/istigosah', [HomeController::class, 'istigosah1']);
Route::get('/koperasi', [HomeController::class, 'koperasi1']);
Route::get('/konsultasi', [HomeController::class, 'konsultasi1']);
Route::get('/media', [HomeController::class, 'media']);
Route::get('/science', [HomeController::class, 'science1']);
Route::get('/komunitas', [HomeController::class, 'komunitas']);
Route::get('/penerbit', [HomeController::class, 'penerbit']);
Route::get('/BlogBimbel', [HomeController::class, 'BlogBimbel']);
Route::get('/BlogIstigosah', [HomeController::class, 'BlogIstigosah']);
Route::get('/BlogKoperasi', [HomeController::class, 'BlogKoperasi']);
Route::get('/BlogKonsultasi', [HomeController::class, 'BlogKonsultasi']);
Route::get('/BlogKomunitas', [HomeController::class, 'BlogKomunitas']);
Route::get('/BlogMedia', [HomeController::class, 'BlogMedia']);
Route::get('/BlogMedia2', [HomeController::class, 'BlogMedia2']);
Route::get('/BlogMedia3', [HomeController::class, 'BlogMedia3']);
Route::get('/BlogMedia4', [HomeController::class, 'BlogMedia4']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/jamedia', [HomeController::class, 'Jamedia1']);
Route::get('/berita', [HomeController::class, 'berita1']);


Route::group(['prefix' => 'dashboards'], function () {
    Route::resource('bimbel', BimbelController::class);
    Route::resource('istigosah', IstigosahController::class);
    Route::resource('event', EventController::class);
    Route::resource('koperasi', KoperasiController::class);
    Route::resource('konsultasi', KonsultasiController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('science', ScienceController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('jamedia', jamediaController::class);
    Route::resource('beranda', BerandaController::class);
    Route::resource('slide', SlideController::class);
    Route::resource('komuniti', KomunitiController::class);
});


