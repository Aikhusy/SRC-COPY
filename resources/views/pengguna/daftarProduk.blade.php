<div class="row">
    @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card mb-3" style="width: 18rem;">

                <img src="{{ asset('storage/'.$product->gambar) }}" class="img-fluid" alt="gambar produk" style="max-width: 10rem; max-height: 10rem">

                <div class="card-body">
                    <h5 class="card-title">{{ $product->nama_produk }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Detail Produk</a>
                    <button class="btn btn-warning" onclick="window.location.href = '{{ route('produk.addToCart', ['id' => $product->id]) }}'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                          <path d="M8 1.5a.5.5 0 0 0-.5.5v6a.5.5 0 0 0 1 0v-6a.5.5 0 0 0-.5-.5zm0 13a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 0 .5.5zm7-7a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h6a.5.5 0 0 0 .5-.5zM1.5 8a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
