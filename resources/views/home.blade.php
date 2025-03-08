@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4">Welcome to POS System</h1>
    <p class="lead">Sistem Point of Sales yang memudahkan transaksi penjualan.</p>
    <img src="https://www.svgrepo.com/show/493082/computer-and-house.svg" alt="" srcset="" style="height: 300px">
    <div class="row text-center">
        <div class="col-md-12 text-center">
            <a href="{{ route('sales.index') }}" class="btn btn-dark">Mulai Berjualan</a>
        </div>
    </div>
</div>

@endsection
