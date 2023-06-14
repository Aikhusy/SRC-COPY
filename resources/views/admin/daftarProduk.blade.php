@if (isset($success))
    <h3>{{ $success }}</h3>
@endif


@if (isset($produk))
    <table>
        <tr>
            <td>Nama item</td>
            <td>harga</td>
            <td>stok</td>
            <td>status</td>
            <td>gambar</td>
            <td>edit</td>
        </tr>
        @foreach ($produk as $item)
            <tr>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->gambar }}</td>
                <td><a href="{{ route('produk.edit', ['id' => $item->id]) }}">edit</a></td>
            </tr>
        @endforeach
    </table>
    
    
@endif
<a href="/admin/produk/form">
    tambah produk baru
</a>