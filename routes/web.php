<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HariController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PerkiraanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[SiswaController::class, 'index'])->name('siswa.index');
Route::resource('gallery', GalleryController::class);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/add', [SiswaController::class, 'add'])->name('siswa.store');
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/edit/{id}', [SiswaController::class, 'edit_proses'])->name('siswa.edit_proses');
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'hapus'])->name('siswa.hapus');
Route::delete('/siswa/hapus/{id}', [SiswaController::class, 'hapus_proses'])->name('siswa.hapus_proses');
Route::get('cetak_siswa', [SiswaController::class, 'cetak_siswa'])->name('cetak_siswa');

Route::resource('buku', BukuController::class);

Route::resource('anggota', AnggotaController::class);

Route::resource('penerbit', PenerbitController::class);

Route::resource('peminjaman', PeminjamanController::class);


Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');


// Route::resource('guru', GuruController::class);
Route::get('guru', [GuruController::class, 'index']);
Route::post('guru', [GuruController::class, 'store']);
Route::get('guru/{id}', [GuruController::class, 'show']);
Route::put('guru/{id}', [GuruController::class, 'update']);
Route::delete('guru/{id}', [GuruController::class, 'destroy']);


//other way route
Route::resource('pelajaran', PelajaranController::class);

Route::resource('kurikulum', KurikulumController::class);

Route::get('jadwal', [JadwalController::class, 'index'])->name('jadwal.index');

Route::resource('perkiraan', PerkiraanController::class);
Route::get('cetak_perkiraan', [PerkiraanController::class, 'cetak_perkiraan'])->name('cetak_perkiraan');



Route::resource('hari', HariController::class);
Route::resource('guru', GuruController::class);

Route::resource('pengumuman', PengumumanController::class);