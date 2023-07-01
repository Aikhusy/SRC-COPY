<div class="row row-cols-1 row-cols-md-4 g-4 mx-auto">
    @foreach ($products as $product)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('storage/' . $product->gambar) }}" class="card-img-top" alt="gambar produk">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->nama_produk }}</h5>
                    <p class="card-text">Harga: {{ $product->harga }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('produk.detail', ['id' => $product->id]) }}" class="btn btn-primary">Detail
                        Produk</a>
                    <button class="btn btn-warning material-symbols-rounded"
                        onclick="window.location.href = '{{ route('produk.addToCart', ['id' => $product->id]) }}'">
                        add_shopping_cart</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
