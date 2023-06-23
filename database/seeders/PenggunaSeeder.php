<?php

namespace Database\Seeders;

use App\Models\pengguna;
use Database\Factories\PenggunaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengguna::create([
            'username'=>'agung',
            'email'=>'agung@gmail',
            'password'=>bcrypt('111'),
            'levels' => '2'
        ]);
        Pengguna::create([
            'username'=>'syaikul',
            'email'=>'syaikul@gmail',
            'password'=>bcrypt('123'),
            'levels' => '2'
        ]);
        Pengguna::create([
            'username'=>'sabna',
            'email'=>'sabna@gmail',
            'password'=>bcrypt('222'),
            'levels' => '2'
        ]);
        Pengguna::create([
            'username'=>'ripat',
            'email'=>'ripat@gmail',
            'password'=>bcrypt('333'),
            'levels' => '2'
        ]);
        Pengguna::create([
            'username'=>'azis',
            'email'=>'azis@gmail',
            'password'=>bcrypt('444'),
            'levels' => '2'
        ]);
        Pengguna::create([
            'username'=>'user',
            'email'=>'user@gmail',
            'password'=>bcrypt('789'),
            'levels' => '1'
        ]);
        PenggunaFactory::new()->count(4)->create();
    }
}
