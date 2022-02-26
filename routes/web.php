<?php

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



Route::get('/login', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/', [SidebarController::class, 'home']);

Route::get('/register',                             [RegisterController::class, 'index']);
Route::get('/identitas-pengusul',                   [IdentitasPengusulController::class, 'index']);
Route::get('/tata-pamong-tata-kelola-kerjasama',    [TataPamongController::class, 'index']);
Route::get('/mahasiswa',                            [MahasiswaController::class, 'index']);
Route::get('/sdm',                                  [SdmController::class, 'index']);
Route::get('/profil-dosen',                         [ProfilDosenController::class, 'index']);
Route::get('/kinerja-dosen',                        [KinerjaDosenController::class, 'index']);
Route::get('/keuangan-sarana-prasarana',            [KeuanganSaranaPrasaranaController::class, 'index']);
Route::get('/pendidikan',                           [PendidikanController::class, 'index']);
Route::get('/penelitian',                           [PenelitianController::class, 'index']);
Route::get('/pkm',                                  [PengabdianController::class, 'index']);
Route::get('/luaran-capaian-tridharma',             [LuaranController::class, 'index']);
Route::get('/matrik',                               [MatriksController::class, 'index']);
