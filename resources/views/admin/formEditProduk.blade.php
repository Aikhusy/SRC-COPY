
<form action="{{ route('produk.update') }}" method="POST">
    @csrf

    <label for="username">Nama Produknya</label>
    <input type="text" id="nama_produk" name="nama_produk">

    <br><br>

    <label for="password">harga</label>
    <input type="number" id="harga" name="harga">

    <br><br>

    <label for="gambar">Gambarnya</label>
    <input type="text" id="gambar" name="gambar">

    <br><br>

    <label for="password">stok</label>
    <input type="number" id="stok" name="stok">

    <br><br>

    <label for="password">status</label>
    <input type="text" id="status" name="status" value="{{ $searchedTable->status}}">

    <br><br>
    <input type="submit" value="Submit">
</form>

<a href="/admin/produk/table">kembali</a>