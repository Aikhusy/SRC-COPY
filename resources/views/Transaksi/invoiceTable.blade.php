@extends('layouts.layout')

@section('content')
    @include('partials.navbar')
    @if (isset($invoices))
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header row g-0 text-center">
                            <div class="fs-4 text-uppercase">Pesanan Kamu</div>
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show d-flex justify-content-center align-items-center col-4"
                                    role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="table-responsive-lg">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">id Pesanan</th>
                                            <th scope="col">id pengguna</th>
                                            <th scope="col">status</th>
                                            <th scope="col">tanggal pesanan</th>
                                            <th scope="col">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($invoices as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->id_pengguna }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td><a href="{{ route('invoice.detail', ['id' => $item->id]) }}"><span
                                                            class="material-symbols-rounded text-warning">
                                                            receipt
                                                        </span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">id Pesanan</th>
                                            <th scope="col">id pengguna</th>
                                            <th scope="col">status</th>
                                            <th scope="col">tanggal pesanan</th>
                                            <th scope="col">Detail</th>
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
@endsection
