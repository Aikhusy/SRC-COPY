<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// use Illuminate\Support\Facades\DB;

class SearchProdukController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->search;
        $hasil = Product::where('nama_produk', 'LIKE', '%' . $keyword . '%')->paginate();
        return view('pengguna.dashboard', ['products' => $hasil]);
    }
}
