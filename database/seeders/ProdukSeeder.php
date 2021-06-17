<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data ke tabel produk
        DB::table('produk')->insert([
            'namaproduk' => 'Espresso',
            'kategori_id' => '1',
            'varian_id' => '1',
            'harga' => '8000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Americano',
          'kategori_id' => '1',
          'varian_id' => '1',
          'harga' => '10000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Americano',
          'kategori_id' => '1',
          'varian_id' => '2',
          'harga' => '12000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Cappucino',
          'kategori_id' => '1',
          'varian_id' => '1',
          'harga' => '13000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Cappucino',
          'kategori_id' => '1',
          'varian_id' => '2',
          'harga' => '15000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Latte',
          'kategori_id' => '1',
          'varian_id' => '1',
          'harga' => '13000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Latte',
          'kategori_id' => '1',
          'varian_id' => '2',
          'harga' => '15000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Mocha',
          'kategori_id' => '1',
          'varian_id' => '1',
          'harga' => '13000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Mocha',
          'kategori_id' => '1',
          'varian_id' => '2',
          'harga' => '15000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Brown Sugar Latte',
          'kategori_id' => '1',
          'varian_id' => '1',
          'harga' => '13000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Brown Sugar Latte',
          'kategori_id' => '1',
          'varian_id' => '2',
          'harga' => '15000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'V60',
          'kategori_id' => '1',
          'varian_id' => '1',
          'harga' => '15000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Chocolate',
          'kategori_id' => '2',
          'varian_id' => '1',
          'harga' => '15000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Chocolate',
          'kategori_id' => '2',
          'varian_id' => '2',
          'harga' => '20000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Matcha',
          'kategori_id' => '2',
          'varian_id' => '1',
          'harga' => '15000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Matcha',
          'kategori_id' => '2',
          'varian_id' => '2',
          'harga' => '20000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Cookies & Cream',
          'kategori_id' => '2',
          'varian_id' => '2',
          'harga' => '20000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Lemon Tea',
          'kategori_id' => '2',
          'varian_id' => '2',
          'harga' => '14000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Kopi Susu Lava Yo Lah',
          'kategori_id' => '3',
          'varian_id' => '1',
          'harga' => '13000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Kopi Susu Lava Yo Lah',
          'kategori_id' => '3',
          'varian_id' => '2',
          'harga' => '15000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Kopi Ningrum',
          'kategori_id' => '3',
          'varian_id' => '2',
          'harga' => '18000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Coffee Caramel Macchiato',
          'kategori_id' => '4',
          'varian_id' => '2',
          'harga' => '22000'
        ]);
        DB::table('produk')->insert([
          'namaproduk' => 'Salted Caramel',
          'kategori_id' => '4',
          'varian_id' => '2',
          'harga' => '25000'
        ]);
    }
}
