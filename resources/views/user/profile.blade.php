@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h2>Profil Pengguna</h2>
    <div class="card p-4 mx-auto" style="max-width: 400px;">
        <h3>{{ $name }}</h3>
        <p>ID Pengguna: {{ $id }}</p>
    </div>
</div>
@endsection
