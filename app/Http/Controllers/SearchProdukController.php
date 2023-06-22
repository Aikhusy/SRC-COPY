<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// use Illuminate\Support\Facades\DB;

class SearchProdukController extends Controller
{
    public function search(Request $request)
    {
        $cari = $request->search;
        $hasil = Product::where('nama_produk', 'LIKE', '%' . $cari . '%')->paginate();
        // $hasil = DB::table('products')
        // ->where('nama_produk','like',"%".$cari."%")
        // ->paginate();
        return view('pengguna.dashboard', ['products' => $hasil]);
    }
}
