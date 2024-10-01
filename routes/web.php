<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\layananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pengaduanController;

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

Route::get('/', [AppController::class, 'index'])->name('home');

Route::get('/layanan', [layananController::class, 'layanan'])->name('layanan');
Route::get('/pengaduan', [pengaduanController::class, 'index'])->name('pengaduan');
Route::post('/pengaduan', [pengaduanController::class, 'savePengaduan'])->name('savePengaduan');
Route::get('/event', [AppController::class, 'event'])->name('event');
Route::get('/event/detail/{id}', [AppController::class, 'eventDetail'])->name('eventDetail');
Route::get('/berita', [AppController::class, 'berita'])->name('berita');
Route::get('/berita/detail/{id}', [AppController::class, 'beritaDetail'])->name('beritaDetail');
Route::get('/profile-desa', [AppController::class, 'profiledesa'])->name('profiledesa');
Route::get('/struktur-organisasi', [AppController::class, 'strukturorg'])->name('strukturorg');
Route::get('/privacy-policy', [AppController::class, 'privacypol'])->name('privacypol');

Route::middleware('guest')->group(function () {
    Route::get('/register', [loginController::class, 'register'])->name('register');
    Route::post('/register', [loginController::class, 'registerPost'])->name('register');
    Route::get('/login', [loginController::class, 'index']);
    Route::post('/login', [loginController::class, 'authenticate'])->name('login');
});

Route::group(['middleware' => ['auth']],function(){
    Route::post('/logout', [loginController::class, 'logout'])->name('logout');
    Route::name('layanan.')->prefix('layanan')->group(function() {
        Route::get('/{info}', [layananController::class, 'detail'])->name('detail');
    });

    Route::post('/layanan/submit', [layananController::class, 'submitLayanan'])->name('submitLayanan');

    Route::get('/profile', function(){ return redirect()->route('profile.dashboard'); })->name('profile');
    Route::name('profile.')->prefix('profile')->group(function () {
        Route::get('/dashboard', [ProfileController::class, 'index'])->name('dashboard');
        Route::get('/data-pribadi', [ProfileController::class, 'datauser'])->name('datauser');
        Route::post('/data-pribadi/{data}', [ProfileController::class, 'datauserUpdate'])->name('datauserUpdate');
        Route::get('/pengajuan', [ProfileController::class, 'pengajuan'])->name('pengajuan');
    });

});
