@if (isset($products))
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row g-0 text-center">
                        <div class="col-sm-6 col-md-8 fs-4 text-uppercase">daftar produk</div>
                        <a class="col-6 col-md-4 btn btn-success text-uppercase"
                            href="{{ route('produk.create') }}">Tambah Produk</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Item</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $item)
                                        <tr>
                                            <td>{{ $item->nama_produk }}</td>
                                            <td>{{ $item->harga }}</td>
                                            <td>{{ $item->stok }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td><img src="{{ asset('storage/'.$item->gambar) }}" class="img-thumbnail"
                                                    alt="gambar produk" style="max-width: 4rem; max-height: 4rem">
                                            </td>
                                            <td><a href="{{ route('produk.edit', ['id' => $item->id]) }}"><span
                                                        class="material-symbols-rounded text-black">
                                                        edit
                                                    </span></a>
                                            </td>
                                            <td><a href="{{ route('produk.delete', ['id' => $item->id]) }}"><span
                                                        class="material-symbols-rounded text-danger">
                                                        delete
                                                    </span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Item</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Status</th>
                                        <th>Gambar</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
