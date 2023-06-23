@if (isset($akun))
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
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Profile</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengguna as $akun)
                                        <tr>
                                            <td>{{ $akun->username }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->level }}</td>
                                            <td><img src="{{ asset('storage/' . $item->gambar) }}" class="img-thumbnail"
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
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Profile</th>
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
