<?php

namespace App\Http\Controllers;

class LaporanPenjualanController extends Controller
{
    public function __invoke()
    {
        $data = [
            'judul' => 'Laporan Penjualan',
            'detail_produk' => [
                [
                    'no' => 1,
                    'periode_penjualan' => '01 - 07 September 2026',
                    'nama_produk' => 'Laptop ThinkPad',
                    'sku' => 'LP-001',
                    'total_transaksi' => 25,
                    'total_produk_terjual' => 30,
                    'total_pendapatan' => 375000000,
                    'stok_tersisa' => 10
                ],
                [
                    'no' => 2,
                    'periode_penjualan' => '01 - 07 September 2026',
                    'nama_produk' => 'Mouse Wireless',
                    'sku' => 'MS-002',
                    'total_transaksi' => 40,
                    'total_produk_terjual' => 55,
                    'total_pendapatan' => 13750000,
                    'stok_tersisa' => 25
                ],
                [
                    'no' => 3,
                    'periode_penjualan' => '01 - 07 September 2026',
                    'nama_produk' => 'Mechanical Keyboard',
                    'sku' => 'KB-003',
                    'total_transaksi' => 32,
                    'total_produk_terjual' => 38,
                    'total_pendapatan' => 32300000,
                    'stok_tersisa' => 17
                ],
                [
                    'no' => 4,
                    'periode_penjualan' => '01 - 07 September 2026',
                    'nama_produk' => 'Monitor 24 Inch',
                    'sku' => 'MN-004',
                    'total_transaksi' => 18,
                    'total_produk_terjual' => 20,
                    'total_pendapatan' => 40000000,
                    'stok_tersisa' => 12
                ]
            ]
        ];
        return view('produk.laporan', compact('data'));
    }
}