<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    //
    public function addToCart(Request $request, $id)
    {
        $jsonString = $request->cookie('cart');
        $validated = $request->validate(['id' => 'required']);
    
        if ($jsonString !== null) {
            $data = json_decode($jsonString, true);
            $dataTambahan = $validated;
            $mergedData = array_merge_recursive($data, $dataTambahan);
            $dataReady = json_encode($mergedData);
    
            // Lakukan sesuatu dengan $data jika cookie 'cart' ada
            // ...
    
            Cookie::queue('cart', $dataReady, 60);
        } else {
            Cookie::queue('cart', $validated, 60);
        }
        return redirect()->route('produk.display');
    }

    public function showCookie(Request $request)
    {
        $cookieValue = Cookie::get('cart');
        dd($cookieValue);
        $data = json_decode($cookieValue, true);
        return view('cart.tableCart',compact($data));
    }
}
