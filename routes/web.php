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



Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/identitas-pengusul',[IdentitasPengusulController::class, 'index'])->middleware('auth');

Route::get('/tata-pamong-tata-kelola-kerjasama',[TataPamongController::class, 'index'])->middleware('auth');
// Route::get('/tata-pamong-tata-kelola-kerjasama', [TataPamongController::class, 'table']);

Route::get('/mahasiswa',[MahasiswaController::class, 'index'])->middleware('auth');

Route::get('/sdm',                                  [SdmController::class, 'index'])->middleware('auth');
Route::get('/profil-dosen',                         [ProfilDosenController::class, 'index'])->middleware('auth');
Route::get('/kinerja-dosen',                        [KinerjaDosenController::class, 'index'])->middleware('auth');
Route::get('/keuangan-sarana-prasarana',            [KeuanganSaranaPrasaranaController::class, 'index'])->middleware('auth');
Route::get('/pendidikan',                           [PendidikanController::class, 'index'])->middleware('auth');
Route::get('/penelitian',                           [PenelitianController::class, 'index'])->middleware('auth');
Route::get('/pkm',                                  [PengabdianController::class, 'index'])->middleware('auth');
Route::get('/luaran-capaian-tridharma',             [LuaranController::class, 'index'])->middleware('auth');
Route::get('/matrik',                               [MatriksController::class, 'index'])->middleware('auth');

