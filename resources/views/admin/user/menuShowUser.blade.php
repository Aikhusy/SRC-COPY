@extends('layouts.layout')

@section('content')
    <div class="container-xl">
        @include('layouts.admin.navbar')
        <h1>Tabel User</h1>
        @include('admin.user.daftarUser')
    </div>
@endsection