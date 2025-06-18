<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BibitController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BudayaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MerkOliController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\SetoranController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\JenisOliController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PencairanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\SerahTerimaController;
use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\GantiPasswordController;

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('lupa-password', [LupaPasswordController::class, 'index']);
Route::get('/reload-captcha', [LoginController::class, 'reloadCaptcha']);
Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/', [FrontController::class, 'beranda']);
Route::get('/profil/tentang-kami', [FrontController::class, 'tentangkami']);
Route::get('/profil/renstra', [FrontController::class, 'renstra']);
Route::get('/profil/tupoksi', [FrontController::class, 'tupoksi']);
Route::get('/wisata', [FrontController::class, 'wisata']);
Route::get('/wisata/{id}/{slug}', [FrontController::class, 'detailwisata']);
Route::get('/budaya', [FrontController::class, 'budaya']);
Route::get('/budaya/{id}/{slug}', [FrontController::class, 'detailbudaya']);
Route::get('/kuliner', [FrontController::class, 'kuliner']);
Route::get('/kuliner/{id}/{slug}', [FrontController::class, 'detailkuliner']);
Route::get('/berita/berita', [FrontController::class, 'berita']);
Route::get('/berita/{id}/{slug}', [FrontController::class, 'detailBerita']);
Route::get('/berita/agenda', [FrontController::class, 'agenda']);
Route::get('/pelatihan/pelatihan', [FrontController::class, 'pelatihan']);
Route::get('/pelatihan/sertifikasi', [FrontController::class, 'sertifikasi']);
Route::get('/pelatihan/bimtek', [FrontController::class, 'bimtek']);

Route::get('/pengawasan/tertib-usaha', [FrontController::class, 'usaha']);
Route::get('/pengawasan/tertib-penyelenggaraan', [FrontController::class, 'penyelenggaraan']);
Route::get('/pengawasan/tertib-pemanfaatan', [FrontController::class, 'pemanfaatan']);


Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('superadmin/beranda', [HomeController::class, 'superadmin']);
    Route::get('superadmin/gp', [GantiPasswordController::class, 'index']);
    Route::post('superadmin/gp', [GantiPasswordController::class, 'update']);

    Route::get('superadmin/profil/tentang-kami', [ProfilController::class, 'tentangkami']);
    Route::post('superadmin/profil/tentang-kami', [ProfilController::class, 'update_tentangkami']);
    Route::get('superadmin/profil/renstra', [ProfilController::class, 'renstra']);
    Route::post('superadmin/profil/renstra', [ProfilController::class, 'update_renstra']);
    Route::get('superadmin/profil/tupoksi', [ProfilController::class, 'tupoksi']);
    Route::post('superadmin/profil/tupoksi', [ProfilController::class, 'update_tupoksi']);

    Route::get('superadmin/header', [SettingController::class, 'header']);
    Route::post('superadmin/header', [SettingController::class, 'updateHeader']);

    Route::get('superadmin/wisata', [WisataController::class, 'index']);
    Route::get('superadmin/wisata/create', [WisataController::class, 'create']);
    Route::post('superadmin/wisata/create', [WisataController::class, 'store']);
    Route::get('superadmin/wisata/edit/{id}', [WisataController::class, 'edit']);
    Route::post('superadmin/wisata/edit/{id}', [WisataController::class, 'update']);
    Route::get('superadmin/wisata/delete/{id}', [WisataController::class, 'delete']);

    Route::get('superadmin/budaya', [BudayaController::class, 'index']);
    Route::get('superadmin/budaya/create', [BudayaController::class, 'create']);
    Route::post('superadmin/budaya/create', [BudayaController::class, 'store']);
    Route::get('superadmin/budaya/edit/{id}', [BudayaController::class, 'edit']);
    Route::post('superadmin/budaya/edit/{id}', [BudayaController::class, 'update']);
    Route::get('superadmin/budaya/delete/{id}', [BudayaController::class, 'delete']);

    Route::get('superadmin/kuliner', [KulinerController::class, 'index']);
    Route::get('superadmin/kuliner/create', [KulinerController::class, 'create']);
    Route::post('superadmin/kuliner/create', [KulinerController::class, 'store']);
    Route::get('superadmin/kuliner/edit/{id}', [KulinerController::class, 'edit']);
    Route::post('superadmin/kuliner/edit/{id}', [KulinerController::class, 'update']);
    Route::get('superadmin/kuliner/delete/{id}', [KulinerController::class, 'delete']);

    Route::get('superadmin/user', [UserController::class, 'index']);
    Route::get('superadmin/user/create', [UserController::class, 'create']);
    Route::post('superadmin/user/create', [UserController::class, 'store']);
    Route::get('superadmin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('superadmin/user/edit/{id}', [UserController::class, 'update']);
    Route::get('superadmin/user/delete/{id}', [UserController::class, 'delete']);

    Route::get('superadmin/laporan', [LaporanController::class, 'index']);
    Route::get('superadmin/laporan/admin', [LaporanController::class, 'admin']);
    Route::get('superadmin/laporan/wisata', [LaporanController::class, 'wisata']);
    Route::get('superadmin/laporan/budaya', [LaporanController::class, 'budaya']);
    Route::get('superadmin/laporan/kuliner', [LaporanController::class, 'kuliner']);
});
