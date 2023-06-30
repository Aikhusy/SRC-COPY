@extends('layouts.layout')

@section('content')
    @include('partials.navbar')
    @if (isset($produk))
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header row g-0 text-center">
                            <div class="fs-4 text-uppercase">Shopping Cart</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive-lg">
                                <form action="{{ route('cart.send') }}" method="POST">
                                    @csrf
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Item</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">total</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($produk as $index => $item)
                                                <tr>
                                                    <td>{{ $item->nama_produk }}</td>
                                                    <td>{{ $item->harga }}</td>
                                                    <td>
                                                        <input type="number" name="data[{{ $index }}][total]"
                                                            min="1" value="1">
                                                        <input type="hidden" value="{{ $item->id }}"
                                                            name="data[{{ $index }}][id]">
                                                    </td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>
                                                        <img src="{{ asset('storage/' . $item->gambar) }}"
                                                            class="img-thumbnail" alt="gambar produk"
                                                            style="max-width: 4rem; max-height: 4rem">
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('produk.removeFromCart', ['id' => $item->id]) }}">
                                                            <span class="material-symbols-rounded text-danger">delete</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama Item</th>
                                                <th>Harga</th>
                                                <th>total</th>
                                                <th>Status</th>
                                                <th>Gambar</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button class="btn btn-outline-success material-symbols-rounded mb-2"
                                        type="submit">shopping_cart_checkout</button>
                                </form>
                                <button class="btn btn-warning material-symbols-rounded"
                                    onclick="window.location.href ='{{ route('clear.cookie') }}'">clear_all</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
