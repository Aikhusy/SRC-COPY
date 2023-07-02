@extends('layouts.layout')

@section('content')
    @if (isset($tableProduk))
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header row g-0 text-center">
                            <div class="fs-4 text-uppercase">Detail Pesanan Kamu</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive-lg">
                                <table id="example1" class="table table-bordered table-striped">
                                    @php
                                        $no = 1;
                                        $total = 0;
                                    @endphp
                                    <thead>

                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Banyak</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tableProduk as $item)
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $item->nama_produk }}</td>
                                                <td>{{ $item->harga }}</td>
                                                <td>{{ $item->amount }}</td>
                                                <td>{{ $item->harga * $item->amount }}</td>
                                            </tr>
                                            @php
                                                $no++;
                                                $total += $item->harga * $item->amount;
                                            @endphp
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Banyak</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <p>Total = <strong>{{ $total }}</strong></p>
                                <script>
                                    function cetakKePDF() {
                                      window.print();
                                    }
                                </script>
                                <style>
                                    @media print {
                                      .print-button {
                                        display: none;
                                      }
                                    }
                                  </style>
                                <button class="btn btn-outline-info ms-3 print-button" onclick="cetakKePDF()">cetak</button>
                                <a class="btn btn-success ms-4 print-button" href="{{ route('invoice.show') }}">kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
