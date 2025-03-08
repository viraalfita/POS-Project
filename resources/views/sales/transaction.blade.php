@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Transaksi Penjualan</h2>
    <form>
        <div class="mb-3">
            <label for="product" class="form-label">Pilih Produk</label>
            <select class="form-select" id="product">
                <option>Produk A</option>
                <option>Produk B</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="quantity">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="price">
        </div>
         <div class="mb-3">
            <label for="amount" class="form-label">Total Bayar</label>
            <input type="number" class="form-control" id="amount">
        </div>
        <button type="submit" class="btn btn-success">Proses Pembelian</button>
    </form>
</div>
@endsection
