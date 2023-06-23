<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\Product;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Product::all();
        return view('admin.formTambahProduk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama_produk' => 'required',
                'harga' => 'required',
                'gambar' => 'required',
                'stok' => 'required',
                'status' => 'required',
            ]
        );

        $produk = Product::create($validatedData);

        $semuaProduk = Product::all();

        return redirect()->route('display.admin')
            ->with('success', 'Produk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function displayAdmin()
    {
        $products = Product::paginate(20);
        // dd($products);
        return view('admin.dashboardAdmin', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $produk = Product::find($id);

        if (!$produk) {
            return redirect()->route('produk.show');
        }
        return view('admin.formEditProduk', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {


        $validatedData = $request->validate(
            [
                'nama_produk' => 'required',
                'harga' => 'required',
                'gambar' => 'required',
                'stok' => 'required',
                'status' => 'required',
            ]
        );

        $produkBaru = Product::find($request->id);

        $produkBaru->nama_produk = $request->nama_produk;
        $produkBaru->harga = $request->harga;
        $produkBaru->gambar = $request->gambar;
        $produkBaru->stok = $request->stok;
        $produkBaru->status = $request->status;

        $produkBaru->save();

        $semuaProduk = Product::all();

        return view('admin.dashboardAdmin')->with('products', $semuaProduk);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Product::where('id', $id)->delete();
        return redirect()->back();
    }

    public function displayProduk()
    {
        $products = Product::paginate(20);
        // dd($products);
        return view('pengguna.dashboard', compact('products'));
    }
}
