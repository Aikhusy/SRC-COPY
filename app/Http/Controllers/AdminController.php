<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        return view('login.registerPage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate(
            [
                'username'=>'required',
                'password'=>'required',
                'levels'=>'required'
            ]
            );
            $pengguna=pengguna::create($validatedData);
            $admin=pengguna::all();

            return view('admin.daftarUser')->with('success','Berhasil input admin')->with('pengguna',$admin);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $admin=pengguna::all();
        return view('admin.daftarUser')->with('pengguna',$admin);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $searchedTable=pengguna::where('id',$id)->first();

        return view('admin.formEditAdmin',compact('searchedTable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
