<?php

namespace App\Http\Controllers;

use App\Models\User;
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
                'name'=>'required',
                'email'=>'required',
                'password'=>'required'
            ]
            );
            $User=User::create($validatedData);
            $usr=User::all();

            return view('admin.daftarUser')->with('success','Berhasil input admin')->with('User',$usr);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $usr=User::all();
        return view('admin.daftarUser')->with('User',$usr);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $searchedTable=User::where('id',$id)->first();

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
