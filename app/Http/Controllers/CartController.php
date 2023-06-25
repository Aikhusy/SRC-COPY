<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    //
    public function addToCart(Request $request, $id)
    {
        $jsonString = $request->cookie('cart');
        $validated['id'] = $id;
    
        if ($jsonString !== null) {
            $data = json_decode($jsonString, true);
            foreach ($data as $value) {
                if ($value == $validated['id']) {
                    // Nilai $validated['id'] sudah ada dalam cookie 'cart'
                    // Lakukan tindakan yang sesuai
                    return redirect()->route('produk.display'); // Keluar dari perulangan jika nilai sudah ditemukan
                }
            }
            $dataTambahan = $validated;
            
            $mergedData = array_merge_recursive($data, $dataTambahan);
            $dataReady = json_encode($mergedData);
            
            // Lakukan sesuatu dengan $data jika cookie 'cart' ada
            // ...
    
            Cookie::queue('cart', $dataReady, 60);
        } else {
            $cookieValue = json_encode($validated);
            Cookie::queue('cart', $cookieValue, 60);
        }
        return redirect()->route('produk.display');
    }

    public function showCookie(Request $request)
    {
        $cookieValue = Cookie::get('cart');
        $data = json_decode($cookieValue, true);
        $produk=[];
        if(isset($data['id'])){
            foreach ($data['id'] as $value) {
                $produkBaru = Product::where('id', $value)->first();
                if ($produkBaru) 
                {
                    $produk[] = $produkBaru;
                }
            }
        }
        
        return view('cart.tableCart',compact('produk'));
    }
    public function clearCookie()
    {
        Cookie::queue(Cookie::forget('cart'));
        $cookieValue = Cookie::get('cart');
        return redirect()->route('produk.display');
    }
}
