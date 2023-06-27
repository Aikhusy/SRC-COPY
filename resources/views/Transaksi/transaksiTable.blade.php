@if (isset($tableProduk))
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row g-0 text-center">
                        <div class="col-sm-6 col-md-8 fs-4 text-uppercase">Pesanan Kamu</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg">
                            <table id="example1" class="table table-bordered table-striped">
                            @php
                                    $no=1;
                                    $total=0;
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
                                        $total+=$item->harga * $item->amount;
                                        @endphp
                                        
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
                            Total ={{$total}}
                            
                            <button href="{{route('transaksi.cetak', ['id' => $idInvoice])}}">cetak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif