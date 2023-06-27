<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
use App\Models\Product;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;

class TransaksiController extends Controller
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
        //
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $table= transaksi::where('id_invoice', $id)->get();
        $tableProduk = [];
        $idInvoice=$id;
        foreach ($table as $row) {
            $produk = Product::where('id', $row->id_produk)->first();
            $produk['amount'] = $row->amount;
            $tableProduk[] = $produk;
        }
        return view('Transaksi.transaksiTable',compact('tableProduk','idInvoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetransaksiRequest $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaksi $transaksi)
    {
        //
    }
    public function cetak($id)
    {
        $table= transaksi::where('id_invoice', $id)->get();
        $tableProduk = [];
        $idInvoice=$id;
        foreach ($table as $row) {
            $produk = Product::where('id', $row->id_produk)->first();
            $produk['amount'] = $row->amount;
            $tableProduk[] = $produk;
        }
        $view = View::make('Transaksi.transaksiTable',compact('tableProduk','idInvoice'));
        $html = $view->render();
    }
}
