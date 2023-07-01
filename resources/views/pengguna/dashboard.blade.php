@extends('layouts.layout')

@section('content')
    @include('partials.navbar')
    <h3 class="text-center mb-3 text-uppercase">Selamat Berbelanja 😊</h3>
    @include('pengguna.daftarProduk')
@endsection
