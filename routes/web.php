<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;

//Route Register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'simpanRegister'])->name('simpan_register');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'cek_login'])->name('cek_login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){

//Route Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/template', [BerandaController::class, 'index'])->name('beranda');

//Route Supplier
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
Route::get('/supplier/create', [SupplierController::class, 'create'])->name('create_supplier');
Route::get('/supplier/{supplier}/edit', [SupplierController::class, 'edit'])->name('edit_supplier');
Route::post('/supplier', [SupplierController::class, 'simpanTambah2'])->name('simpan_tambah2');
Route::put('/supplier', [SupplierController::class, 'simpanEdit2'])->name('simpan_edit2');
Route::delete('/suuplier', [SupplierController::class, 'hapus'])->name('hapus_supplier');

//Route Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan');
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('create_karyawan');
Route::get('/karyawan/edit/{karyawan}', [KaryawanController::class, 'edit'])->name('edit_karyawan');
Route::put('/karyawan', [KaryawanController::class, 'simpanEdit1'])->name('simpan_edit1');
Route::post('/karyawan', [KaryawanController::class, 'simpanTambah1'])->name('simpan_tambah1');
Route::delete('/karyawan', [KaryawanController::class, 'hapus'])->name('hapus_karyawan');

//Route Produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('create_produk');
Route::get('/produk{produk}/edit', [ProdukController::class, 'edit'])->name('edit_produk');
Route::post('/produk', [ProdukController::class, 'simpanTambah'])->name('simpan_tambah');
Route::delete('/produk', [ProdukController::class, 'hapus'])->name('hapus_produk');
Route::put('/produk', [ProdukController::class, 'simpanEdit'])->name('simpan_edit');

});
