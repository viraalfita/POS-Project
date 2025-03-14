<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('t_stock')->insert([
            ['stock_id' => 1, 'supplier_id' => 1, 'barang_id' => 1, 'user_id' => 1, 'stock_tanggal' => now(), 'stock_jumlah' => 50, 'created_at' => now()],
            ['stock_id' => 2, 'supplier_id' => 1, 'barang_id' => 2, 'user_id' => 1, 'stock_tanggal' => now(), 'stock_jumlah' => 40, 'created_at' => now()],
            ['stock_id' => 3, 'supplier_id' => 1, 'barang_id' => 7, 'user_id' => 1, 'stock_tanggal' => now(), 'stock_jumlah' => 30, 'created_at' => now()],
            ['stock_id' => 4, 'supplier_id' => 1, 'barang_id' => 8, 'user_id' => 1, 'stock_tanggal' => now(), 'stock_jumlah' => 20, 'created_at' => now()],
            ['stock_id' => 5, 'supplier_id' => 1, 'barang_id' => 13, 'user_id' => 1, 'stock_tanggal' => now(), 'stock_jumlah' => 15, 'created_at' => now()],
            ['stock_id' => 6, 'supplier_id' => 2, 'barang_id' => 3, 'user_id' => 2, 'stock_tanggal' => now(), 'stock_jumlah' => 60, 'created_at' => now()],
            ['stock_id' => 7, 'supplier_id' => 2, 'barang_id' => 4, 'user_id' => 2, 'stock_tanggal' => now(), 'stock_jumlah' => 50, 'created_at' => now()],
            ['stock_id' => 8, 'supplier_id' => 2, 'barang_id' => 9, 'user_id' => 2, 'stock_tanggal' => now(), 'stock_jumlah' => 40, 'created_at' => now()],
            ['stock_id' => 9, 'supplier_id' => 2, 'barang_id' => 10, 'user_id' => 2, 'stock_tanggal' => now(), 'stock_jumlah' => 30, 'created_at' => now()],
            ['stock_id' => 10, 'supplier_id' => 2, 'barang_id' => 15, 'user_id' => 2, 'stock_tanggal' => now(), 'stock_jumlah' => 20, 'created_at' => now()],
            ['stock_id' => 11, 'supplier_id' => 3, 'barang_id' => 5, 'user_id' => 3, 'stock_tanggal' => now(), 'stock_jumlah' => 100, 'created_at' => now()],
            ['stock_id' => 12, 'supplier_id' => 3, 'barang_id' => 6, 'user_id' => 3, 'stock_tanggal' => now(), 'stock_jumlah' => 80, 'created_at' => now()],
            ['stock_id' => 13, 'supplier_id' => 3, 'barang_id' => 11, 'user_id' => 3, 'stock_tanggal' => now(), 'stock_jumlah' => 70, 'created_at' => now()],
            ['stock_id' => 14, 'supplier_id' => 3, 'barang_id' => 12, 'user_id' => 3, 'stock_tanggal' => now(), 'stock_jumlah' => 60, 'created_at' => now()],
            ['stock_id' => 15, 'supplier_id' => 3, 'barang_id' => 14, 'user_id' => 3, 'stock_tanggal' => now(), 'stock_jumlah' => 50, 'created_at' => now()],
        ]);
    }
}
