<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangModel;

class BarangController extends Controller
{
    public function index()
    {
        return BarangModel::with('kategori')->get(); // Termasuk relasi kategori
    }

    public function store(Request $request)
    {
        // Default image path
        $imagePath = null;

        // Jika ada file gambar diupload
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Simpan file ke folder 'barang' di disk 'public'
            $image->store('barang', 'public');

            // Ambil nama file yang di-hash
            $imagePath = 'barang/' . $image->hashName();
        }

        // Simpan data ke database
        $barang = BarangModel::create([
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'image' => $imagePath,
        ]);

        return response()->json($barang, 201);
    }


    public function show(BarangModel $barang)
    {
        return $barang->load('kategori'); // Tampilkan juga relasi kategori
    }

    public function update(Request $request, BarangModel $barang)
    {
        $barang->update($request->all());
        return response()->json($barang->load('kategori'));
    }

    public function destroy(BarangModel $barang)
    {
        $barang->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
