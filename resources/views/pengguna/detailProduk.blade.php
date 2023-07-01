@extends('layouts.layout')

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center mt-5">
        <div class="card position-relative" style="max-width: 80%; max-height: 100dvh">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('storage/' . $product->gambar) }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-header row g-0 text-center">
                        <div class="fs-4 text-uppercase">Detail Produk</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fs-3">{{ $product->nama_produk }}</h5>
                        <p class="card-text fs-4">Harga: {{ $product->harga }}</p>
                        <p class="card-text fs-4">Jumlah Stok: {{ $product->stok }}</p>
                        <p class="card-text fs-4">Status: {{ $product->status }}</p>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 col-4 position-absolute top-100 start-50 translate-middle">
                <a class="btn btn-success" href="{{ route('produk.display') }}">kembali</a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        gsap.from('.card', {
            duration: 1,
            y: -200,
            opacity: 0,
            ease: 'back'
        });
    </script>
@endsection
