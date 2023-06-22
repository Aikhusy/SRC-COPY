<div class="row">
    @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card mb-3" style="width: 18rem;">
                <img src="{{ asset($product->gambar) }}" class="card-img-top" alt="gambar produk">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->nama_produk }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Detail Produk</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
