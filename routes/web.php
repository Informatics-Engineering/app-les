<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as admin;
use App\Http\Controllers\Siswa\DashboardController as siswa;
use App\Http\Controllers\Guru\DashboardController as guru;

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
    return view('layouts.tempo');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin', [admin::class, 'index']);
Route::get('/siswa', [siswa::class, 'index']);
Route::get('/guru', [guru::class, 'index']);