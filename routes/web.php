<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PinjamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route untuk Data Buku
Route::get('/buku', [BukuController::class, 'bukutampil'])->name('buku.tampil');
Route::post('/buku/tambah', [BukuController::class, 'bukutambah'])->name('buku.tambah');
Route::get('/buku/hapus/{id_buku}', [BukuController::class, 'bukuhapus'])->name('buku.hapus');
Route::put('/buku/edit/{id_buku}', [BukuController::class, 'bukuedit'])->name('buku.edit');

// Route untuk Data Anggota
Route::get('/anggota', [AnggotaController::class, 'anggotatampil'])->name('anggota.tampil');
Route::post('/anggota/tambah', [AnggotaController::class, 'anggotatambah'])->name('anggota.tambah');
Route::get('/anggota/hapus/{id_anggota}', [AnggotaController::class, 'anggotahapus'])->name('anggota.hapus');
Route::put('/anggota/edit/{id_anggota}', [AnggotaController::class, 'anggotaedit'])->name('anggota.edit');

// Route untuk Data Petugas
Route::get('/petugas', [PetugasController::class, 'petugastampil'])->name('petugas.tampil');
Route::post('/petugas/tambah', [PetugasController::class, 'petugastambah'])->name('petugas.tambah');
Route::get('/petugas/hapus/{id_petugas}', [PetugasController::class, 'petugashapus'])->name('petugas.hapus');
Route::put('/petugas/edit/{id_petugas}', [PetugasController::class, 'petugasedit'])->name('petugas.edit');

// Route untuk Data Peminjaman
Route::get('/pinjam', [PinjamController::class, 'pinjamtampil'])->name('pinjam.tampil');
Route::post('/pinjam/tambah', [PinjamController::class, 'pinjamtambah'])->name('pinjam.tambah');
Route::get('/pinjam/hapus/{id_pinjam}', [PinjamController::class, 'pinjamhapus'])->name('pinjam.hapus');
Route::put('/pinjam/edit/{id_pinjam}', [PinjamController::class, 'pinjamedit'])->name('pinjam.edit');

// Route untuk Home
Route::get('/home', function () {
    return view('view_home');
})->name('home');

// Route untuk Logout
Route::get('/logout', function () {
    // Proses logout disini
    return redirect('/');
})->name('logout');

