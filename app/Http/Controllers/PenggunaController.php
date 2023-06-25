<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\Product;
use App\Http\Requests\StorepenggunaRequest;
use App\Http\Requests\UpdatepenggunaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \Firebase\JWT\JWT;
class PenggunaController extends Controller
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
        $user = pengguna::all();
        return view('login.registerPage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $validatedData = $request->validate([
            'username' => 'required',
            'email'=>'required',
            'password' => 'required',
            'levels' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Pengguna::create($validatedData);

        unset($validatedData);
        return redirect()->route('login')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(pengguna $pengguna)
    {
        //
        $dataPengguna=pengguna::all();
        return view('admin.user.daftarUser')->with('pengguna',$dataPengguna);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengguna $pengguna)
    {
        //
    }

    public function lookVar(Request $request)
    {
        dd($request->all());
    }

    public function loginValidate(Request $request)
    {
        $validate= $request->validate([
            'email'=>'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            $users = pengguna::where('email', $request['email'])->first();

            if ($users['levels'] == 1) {
                unset($users);
                return redirect()->route('display.admin');
            }
            if ($users['levels'] == 2) {
                unset($users);
                return redirect()->route('produk.display');
            }
        }
        return redirect()->route('login');
    }
    public function newLoginValidate(Request $request)
    {
        $validate= $request->validate([
            'email'=>'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            $users = pengguna::where('email', $request['email'])->first();

            if ($users['levels'] == 1) {
                unset($users);
                return redirect()->route('display.admin');
            }
            if ($users['levels'] == 2) {
                unset($users);
                return redirect()->route('produk.display');
            }
        }
    }
}
