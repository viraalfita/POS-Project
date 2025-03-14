<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_barang')->insert([
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Laptop', 'harga_beli' => 5000000, 'harga_jual' => 7000000, 'created_at' => now()],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Smartphone', 'harga_beli' => 3000000, 'harga_jual' => 4500000, 'created_at' => now()],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG003', 'barang_nama' => 'Kemeja', 'harga_beli' => 100000, 'harga_jual' => 150000, 'created_at' => now()],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 200000, 'harga_jual' => 300000, 'created_at' => now()],
            ['barang_id' => 5, 'kategori_id' => 4, 'barang_kode' => 'BRG005', 'barang_nama' => 'Pensil', 'harga_beli' => 2000, 'harga_jual' => 5000, 'created_at' => now()],
            ['barang_id' => 6, 'kategori_id' => 4, 'barang_kode' => 'BRG006', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 5000, 'harga_jual' => 10000, 'created_at' => now()],
            ['barang_id' => 7, 'kategori_id' => 1, 'barang_kode' => 'BRG007', 'barang_nama' => 'Tablet', 'harga_beli' => 2000000, 'harga_jual' => 3000000, 'created_at' => now()],
            ['barang_id' => 8, 'kategori_id' => 1, 'barang_kode' => 'BRG008', 'barang_nama' => 'Printer', 'harga_beli' => 1500000, 'harga_jual' => 2000000, 'created_at' => now()],
            ['barang_id' => 9, 'kategori_id' => 2, 'barang_kode' => 'BRG009', 'barang_nama' => 'Jaket', 'harga_beli' => 250000, 'harga_jual' => 400000, 'created_at' => now()],
            ['barang_id' => 10, 'kategori_id' => 2, 'barang_kode' => 'BRG010', 'barang_nama' => 'Topi', 'harga_beli' => 50000, 'harga_jual' => 75000, 'created_at' => now()],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'BRG011', 'barang_nama' => 'Penghapus', 'harga_beli' => 1000, 'harga_jual' => 2000, 'created_at' => now()],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'BRG012', 'barang_nama' => 'Penggaris', 'harga_beli' => 3000, 'harga_jual' => 5000, 'created_at' => now()],
            ['barang_id' => 13, 'kategori_id' => 1, 'barang_kode' => 'BRG013', 'barang_nama' => 'Monitor', 'harga_beli' => 1000000, 'harga_jual' => 1500000, 'created_at' => now()],
            ['barang_id' => 14, 'kategori_id' => 1, 'barang_kode' => 'BRG014', 'barang_nama' => 'Keyboard', 'harga_beli' => 500000, 'harga_jual' => 700000, 'created_at' => now()],
            ['barang_id' => 15, 'kategori_id' => 2, 'barang_kode' => 'BRG015', 'barang_nama' => 'Tas', 'harga_beli' => 300000, 'harga_jual' => 450000, 'created_at' => now()],
        ]);
    }
}
