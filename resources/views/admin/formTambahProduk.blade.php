@extends('layouts.layout')

@section('content')
    <div class="row justify-content-center align-items-center mt-4">
        <div class="card " style="width: 50%">
            <div class="card-header text-center fs-4 text-uppercase">
                Tambah Produk
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label" for="username">Nama Produknya</label>
                        <input class="form-control" type="text" id="nama_produk" name="nama_produk">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="password">harga</label>
                        <input class="form-control" type="number" id="harga" name="harga">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="gambar">Gambarnya</label>
                        <input class="form-control" type="file" id="gambar" required="required" name="gambar">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="password">stok</label>
                        <input class="form-control" type="number" id="stok" name="stok">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="password">status</label>
                        <input class="form-control" type="text" id="status" name="status">
                    </div>

                    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <a class="btn btn-success mb-3" href="{{ route('display.admin') }}">kembali</a>
        </div>
    </div>
@endsection
