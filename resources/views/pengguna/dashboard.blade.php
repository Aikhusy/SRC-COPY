@extends('layouts.layout')

@section('content')
    <div class="container-xl">
        @include('partials.navbar')
        <h1>Selamat Berbelanja</h1>
        @include('pengguna.daftarProduk')
    </div>
@endsection
