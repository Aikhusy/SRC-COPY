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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate(
            [
                'nama_produk'=>'required',
                'harga'=>'required',
                'gambar'=>'required',
                'stok'=>'required',
                'status'=>'required',
            ]
        );

        $produk=Product::create($validatedData);

        $semuaProduk=Product::all();

        return view('admin.daftarProduk')->with('success','Berhasil menginput barang baru')->with('produk',$semuaProduk);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $semuaProduk=Product::all();
        return view('admin.daftarProduk')->with('produk',$semuaProduk);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $searchedTable=Product::where('id',$id)->first();

        return view('admin.formEditProduk',compact('searchedTable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
