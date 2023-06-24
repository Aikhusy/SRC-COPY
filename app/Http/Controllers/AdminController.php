<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return view('admin.user.formTambahUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate(
            [
                'username'=>'required',
                'email'=>'required',
                'password'=>'required',
                'levels'=>'required'
            ]
            );
            $validatedData['password'] = Hash::make($validatedData['password']);
            $pengguna=pengguna::create($validatedData);
            $admin=pengguna::all();

            return redirect()->route('admin.show')->with('success','Berhasil input admin')->with('pengguna',$admin);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $pengguna=pengguna::all();
        return view('admin.user.menuShowUser',compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengguna=pengguna::where('id',$id)->first();

        return view('admin.user.formEditUser',compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $penggunaBaru = pengguna::find($request->id);
        $validatedData=$request->validate(
            [
                'username'=>'required',
                'email'=>'required',
                'levels'=>'required'
            ]
        );
        if(isset($request['newPassword']) && isset($request['oldPassword']))
        {
            if (Hash::check($request->input('oldPassword'), $penggunaBaru['password'])) 
            {
                // Password cocok, lakukan tindakan yang sesuai
                $passwordBaru = Hash::make($request['newPassword']);
                $penggunaBaru['username']=$validatedData['username'];
                $penggunaBaru['email']=$validatedData['email'];
                $penggunaBaru['password']=$passwordBaru;
                $penggunaBaru['levels']=$validatedData['levels'];

                $penggunaBaru->save();
                $admin=pengguna::all();

                return redirect()->route('admin.show')->with('success','Berhasil input admin')->with('pengguna',$admin);
            }
        }


           
        $penggunaBaru['username']=$validatedData['username'];
        $penggunaBaru['email']=$validatedData['email'];
        $penggunaBaru['levels']=$validatedData['levels'];
        $penggunaBaru->save();


            
        $admin=pengguna::all();
        return redirect()->route('admin.show')->with('success','Berhasil input admin')->with('pengguna',$admin);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        pengguna::where('id', $id)->delete();
        return redirect('/admin/user');
    }
}
