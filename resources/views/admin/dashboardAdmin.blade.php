@extends('layouts.layout')

@section('content')
    <div class="container-xl">
        @include('layouts.admin.navbar')
        <h1>Dashboard Admin</h1>
        @include('admin.daftarProduk')
    </div>
@endsection
