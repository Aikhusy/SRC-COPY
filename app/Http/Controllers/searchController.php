<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class searchController extends Controller
{
    public function search(Request $request, $active)
    {
        $keyword = $request->search;
        if ($active === "product") {
            $product = Product::where('nama_produk', 'LIKE', '%' . $keyword . '%')->paginate();
            return view('pengguna.dashboard', ['products' => $product])->with('active', $active);
        }

        if ($active === "cart") {
            // $cookieValue = Cookie::get('cart');
            // $data = [];
            // $data = json_decode($cookieValue, true);
            // if (isset($data)) {
            //     if (is_array($data['id'])) {
            //         foreach ($data['id'] as $value) {
            //             $dataProduk = Product::where('id', 'LIKE', '%' . $value . '%')->first();
            //             if ($dataProduk) {
            //                 $arrayProduk[] = $dataProduk;
            //             }
            //         }
            //     }
            //     return view('cart.tableCart', compact('produk'))->with('active', $active);
            // }
        }
    }
}
