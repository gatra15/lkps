<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IdentitasPengusulController;
use App\Http\Controllers\KeuanganSaranaPrasaranaController;
use App\Http\Controllers\KinerjaDosenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LuaranController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatriksController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\ProfilDosenController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SdmController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\TataPamongController;

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



Route::get('/', [LoginController::class, 'index']);
Route::get('/home', [SidebarController::class, 'home']);
Route::get('/identitas-pengusul', [SidebarController::class, 'identitas']);
Route::get('/tata-pamong-tata-kelola-kerjasama', [SidebarController::class, 'tataPamong']);
Route::get('/mahasiswa', [SidebarController::class, 'mahasiswa']);
Route::get('/sdm', [SidebarController::class, 'sdm']);
Route::get('/profil-dosen', [SidebarController::class, 'profilDosen']);
Route::get('/kinerja-dosen', [SidebarController::class, 'kinerjaDosen']);
Route::get('/keuangan-sarana-prasarana', [Controller::class, 'keuangan']);
Route::get('/pendidikan', [SidebarController::class, 'pendidikan']);
Route::get('/penelitian', [SidebarController::class, 'penelitian']);
Route::get('/pkm', [SidebarController::class, 'pkm']);
Route::get('/luaran-capaian-tridharma', [SidebarController::class, 'luaran']);
Route::get('/matrik', [SidebarController::class, 'matrik']);

Route::get('/register',                             [RegisterController::class, 'index']);