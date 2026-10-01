<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\QueryBuilderController;

Route::get('/query-builder/insert', [QueryBuilderController::class, 'insertData']);
Route::get('/query-builder/insert-id', [QueryBuilderController::class, 'insertGetId']);
Route::get('/query-builder/get', [QueryBuilderController::class, 'getData']);
Route::get('/query-builder/first', [QueryBuilderController::class, 'firstData']);
Route::get('/query-builder/select', [QueryBuilderController::class, 'selectData']);
Route::get('/query-builder/multiple-where', [QueryBuilderController::class, 'multipleWhere']);
Route::get('/query-builder/where-operator', [QueryBuilderController::class, 'whereOperator']);
Route::get('/query-builder/update', [QueryBuilderController::class, 'updateData']);
Route::get('/query-builder/increment', [QueryBuilderController::class, 'incrementDecrement']);
Route::get('/query-builder/delete', [QueryBuilderController::class, 'deleteData']);
Route::get('/query-builder/truncate', [QueryBuilderController::class, 'truncateData']);
Route::get('/query-builder/pluck', [QueryBuilderController::class, 'pluckData']);
Route::get('/query-builder/aggregate', [QueryBuilderController::class, 'aggregateData']);
Route::get('/query-builder/orders', [QueryBuilderController::class, 'getOrders']);
Route::get('/query-builder/insert-order', [QueryBuilderController::class, 'insertOrder']);
Route::get('/query-builder/join', [QueryBuilderController::class, 'joinData']);
Route::get('/query-builder/left-join', [QueryBuilderController::class, 'leftJoinData']);
Route::get('/query-builder/order-by', [QueryBuilderController::class, 'orderByData']);
Route::get('/query-builder/limit', [QueryBuilderController::class, 'limitData']);
Route::get('/query-builder/offset', [QueryBuilderController::class, 'offsetData']);
Route::get('/query-builder/select-sub', [QueryBuilderController::class, 'selectSubData']);
Route::get('/query-builder/select-raw', [QueryBuilderController::class, 'selectRawData']);
Route::get('/query-builder/where-raw', [QueryBuilderController::class, 'whereRawData']);

Route::get('/lany/create', [QueryBuilderController::class, 'createData']);
Route::get('/lany/save', [QueryBuilderController::class, 'saveData']);
Route::get('/lany/all', [QueryBuilderController::class, 'getAllUsers']);
Route::get('/lany/find', [QueryBuilderController::class, 'findUser']);
Route::get('/lany/where', [QueryBuilderController::class, 'whereData']);
Route::get('/lany/first-or-fail', [QueryBuilderController::class, 'firstOrFailData']);
Route::get('/lany/update-save', [QueryBuilderController::class, 'updateSaveData']);
Route::get('/lany/destroy', [QueryBuilderController::class, 'destroyData']);

Route::get('/eloquent/where', [QueryBuilderController::class, 'eloquentWhere']);
Route::get('/eloquent/or-where', [QueryBuilderController::class, 'eloquentOrWhere']);
Route::get('/eloquent/where-between', [QueryBuilderController::class, 'eloquentWhereBetween']);
Route::get('/eloquent/where-in', [QueryBuilderController::class, 'eloquentWhereIn']);
Route::get('/eloquent/where-null', [QueryBuilderController::class, 'eloquentWhereNull']);
Route::get('/eloquent/where-not-null', [QueryBuilderController::class, 'eloquentWhereNotNull']);
Route::get('/eloquent/when', [QueryBuilderController::class, 'eloquentWhen']);

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/submit-form', [FormController::class, 'submitForm']);

// Route::get('/laporan', LaporanPenjualanController::class);

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