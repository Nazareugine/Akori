<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data ke tabel kategori
        DB::table('kategori')->insert([
          'kategori' => 'Coffee'
        ]);
        DB::table('kategori')->insert([
          'kategori' => 'Non Coffee'
        ]);
        DB::table('kategori')->insert([
          'kategori' => 'Signature'
        ]);
        DB::table('kategori')->insert([
          'kategori' => 'Caramel Series'
        ]);
    }
}
