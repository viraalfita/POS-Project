<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            ['supplier_id' => 1, 'supplier_kode' => 'SUP001', 'supplier_nama' => 'PT. Sumber Jaya', 'supplier_alamat' => 'Jl. Merdeka No.1', 'created_at' => now()],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP002', 'supplier_nama' => 'CV. Makmur Sentosa', 'supplier_alamat' => 'Jl. Sudirman No.45', 'created_at' => now()],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP003', 'supplier_nama' => 'UD. Sukses Abadi', 'supplier_alamat' => 'Jl. Diponegoro No.77', 'created_at' => now()],
        ]);
    }
}
