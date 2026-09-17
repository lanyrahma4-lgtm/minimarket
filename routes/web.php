<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LaporanPenjualanController;

Route::get('/laporan', LaporanPenjualanController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/produk', [ProdukController::class, 'index']);
// Route::get('/produk/{id}', [ProdukController::class, 'show']);

// Route::get('/', function () {
//     return '<h1>Selamat Datang di Dashboard POS Toko Kelontong</h1>';
// });

// Route::get('produk/{id}', function ($id) {
//     return 'Menampilkan data produk dengan ID: ' . $id;
// });

// Route::get('/produk/cari/{nama}', function ($nama = null) {
//     if ($nama) {
//         return 'Hasil pencarian produk: ' . $nama;
//     }
//      return 'Silakan masukkan kata kunci pencarian pada URL 
//     (contoh: /produk/cari/sabun)';
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/produk', function () {
//         return 'Halaman Kelola Produk (Hanya Admin)';
//     })->name('admin.produk');
//     Route::get('/kategori', function () {
//         return 'Halaman Kelola Kategori Produk (Hanya Admin)';
//     })->name('admin.kategori');
// });

// Route::prefix('kasir')->group(function () {
//     Route::get('/transaksi', function () {
//         return 'Halaman Input Transaksi Penjualan (Kasir)';
//     })->name('kasir.transaksi');
// });

// Route::get('/', function () {
//     return view('dashboard_pos', [
//         'nama_pegawai' => 'Budi Santoso',
//         'shift' => 'Pagi (08:00 - 15:00)'
//     ]);
// });

// Route::get('/produk-toko', function () {

//     $produk = [
//         [
//             'nama' => 'Dubai Chewy Cookie',
//             'sku' => 'DC001',
//             'harga' => 18000,
//             'stok' => 20,
//             'gambar' => 'dubai.jpg'
//         ],

//         [
//             'nama' => 'Strawberry Dubai Cookie',
//             'sku' => 'SDC001',
//             'harga' => 20000,
//             'stok' => 15,
//             'gambar' => 'strawberry.jpg'
//         ],

//         [
//             'nama' => 'Dubai Berry Brownie',
//             'sku' => 'DBB001',
//             'harga' => 22000,
//             'stok' => 18,
//             'gambar' => 'berry.jpg'
//         ]
//     ];

//     return view('daftar_produk', [
//         'produk' => $produk
//     ]);

// });



// Route::get('/', function () {
//     return view('auth/login');
//     });

// Route::post('/login', [LoginController::class, 'login']);

// Route::prefix('admin')->group (function () {
//     Route::get('/dashboard', function () {
//         return view('welcome');
//     })->name('admin.dashboard');
// });
// Route::prefix('umum')->group (function () {
//     Route::get('/dashboard', function () {
//         return view('welcome');
//     })->name('umum.dashboard');
// });