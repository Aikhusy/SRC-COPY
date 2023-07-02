@extends('layouts.layout')

@section('content')
    @include('partials.navbar')
    <h3 class="text-center mb-3 text-uppercase">Selamat Berbelanja 😊</h3>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @include('pengguna.daftarProduk')
@endsection
