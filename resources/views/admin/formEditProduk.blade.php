
<form action="{{ route('produk.update') }}" method="POST">
    @csrf
    <label for="username">Nama Produknya</label>
    <input type="text" id="nama_produk" name="nama_produk" value="{{ $produk->status}}">

    <br><br>

    <label for="password">harga</label>
    <input type="number" id="harga" name="harga" value="{{ $produk->harga}}">

    <br><br>

    <label for="gambar">Gambarnya</label>
    <input type="text" id="gambar" name="gambar" value="{{ $produk->gambar}}">

    <br><br>

    <label for="password">stok</label>
    <input type="number" id="stok" name="stok" value="{{ $produk->stok}}">

    <br><br>

    <label for="password">status</label>
    <input type="text" id="status" name="status" value="{{ $produk->status}}">

    <br><br>
    <input type="hidden" id="id" name="id" value="{{ $produk->id}}">
    <input type="submit" value="Submit">
</form>

<a href="{{ route('produk.show') }}">kembali</a>