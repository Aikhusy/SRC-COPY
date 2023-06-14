<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nama_produk' => 'Aqua 300ml',
            'harga' => '3000',
            'gambar' => 'image/Aqua-300ml.png',
            'stok' => '20',
            'status' => 'ada'
        ]);
        Product::create([
            'nama_produk' => 'Fruit tea 600ml',
            'harga' => '7000',
            'gambar' => 'image/ft.jpg',
            'stok' => '10',
            'status' => 'ada'
        ]);
        Product::create([
            'nama_produk' => 'Chitato',
            'harga' => '12000',
            'gambar' => 'image/ctt.jpg',
            'stok' => '500',
            'status' => 'ada'
        ]);
        Product::create([
            'nama_produk' => 'Lays',
            'harga' => '12000',
            'gambar' => 'image/lays.jpg',
            'stok' => '120',
            'status' => 'ada'
        ]);
        Product::create([
            'nama_produk' => 'Teh pucuk',
            'harga' => '3000',
            'gambar' => 'image/pck.jpg',
            'stok' => '20',
            'status' => 'ada'
        ]);
        Product::create([
            'nama_produk' => 'Indomie goreng',
            'harga' => '3500',
            'gambar' => 'image/ind.png',
            'stok' => '20',
            'status' => 'ada'
        ]);
        Product::create([
            'nama_produk' => 'Mie Sedap Goreng',
            'harga' => '3500',
            'gambar' => 'image/sdp.jpg',
            'stok' => '20',
            'status' => 'ada'
        ]);
        Product::create([
            'nama_produk' => 'Sprite',
            'harga' => '5000',
            'gambar' => 'image/sprt.jpg',
            'stok' => '20',
            'status' => 'ada'
        ]);
        Product::create([
            'nama_produk' => 'Fanta',
            'harga' => '5000',
            'gambar' => 'image/fnt.jpg',
            'stok' => '20',
            'status' => 'ada'
        ]);
        Product::create([
            'nama_produk' => 'Coca-cola',
            'harga' => '5000',
            'gambar' => 'image/cccl.jpg',
            'stok' => '20',
            'status' => 'ada'
        ]);
    }
}
