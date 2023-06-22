@extends('layouts.layout')

@section('content')
    <div class="row justify-content-center align-items-center mt-2">
        <div class="card " style="width: 50%">
            <div class="card-header text-center fs-4 text-uppercase">
                Edit Produk
            </div>
            <div class="card-body">
                <form action="{{ route('produk.update') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label" for="username">Nama Produknya</label>
                        <input class="form-control" type="text" id="nama_produk" name="nama_produk"
                            value="{{ $produk->status }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="password">harga</label>
                        <input class="form-control" type="number" id="harga" name="harga"
                            value="{{ $produk->harga }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="gambar">Gambarnya</label>
                        <input class="form-control" type="text" id="gambar" name="gambar"
                            value="{{ $produk->gambar }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="password">stok</label>
                        <input class="form-control" type="number" id="stok" name="stok"
                            value="{{ $produk->stok }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="password">status</label>
                        <input class="form-control" type="text" id="status" name="status"
                            value="{{ $produk->status }}">
                    </div>

                    <input class="form-control" type="hidden" id="id" name="id" value="{{ $produk->id }}">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <a class="btn btn-success mb-3" href="{{ route('display.admin') }}">kembali</a>
        </div>
    </div>
@endsection
