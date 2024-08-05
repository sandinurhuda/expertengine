<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKerusakanController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function() {
//     return view('index');
// });

// Route::get('/dashboard', function() {
//     return view('dashboard');
// });

// admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
    Route::get('/datakerusakan', [DataKerusakanController::class, 'index'])->name('datakerusakan');

});

Route::get('/login', [LoginController::class, 'index'])->name('login');

// universal
Route::get('/diagnosis', [DiagnosisController::class, 'index'])->name('diagnosis');
Route::get('/hasildiagnosis', [DiagnosisController::class, 'hasildiagnosis'])->name('hasildiagnosis');