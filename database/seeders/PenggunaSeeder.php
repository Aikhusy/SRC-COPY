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
            'password'=>bcrypt('111'),
            'levels' => '2'
        ]);
        Pengguna::create([
            'username'=>'syaikul',
            'password'=>bcrypt('123'),
            'levels' => '2'
        ]);
        Pengguna::create([
            'username'=>'sabna',
            'password'=>bcrypt('222'),
            'levels' => '2'
        ]);
        Pengguna::create([
            'username'=>'ripat',
            'password'=>bcrypt('333'),
            'levels' => '2'
        ]);
        Pengguna::create([
            'username'=>'azis',
            'password'=>bcrypt('444'),
            'levels' => '2'
        ]);
        Pengguna::create([
            'username'=>'user',
            'password'=>bcrypt('789'),
            'levels' => '1'
        ]);
        PenggunaFactory::new()->count(4)->create();
    }
}
