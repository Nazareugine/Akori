<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bahan')->insert([
            'namabahan' => 'Kopi',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Krimer',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Gula',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Gula Merah',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Cup 8 Oz',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Cup 14 Oz',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Mineral',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Oreo',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Ice Cube',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Freshmilk',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Powder Choco',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Matcha Powder',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Lemon Tea',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Vanilla Syrup',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Caramel Syrup',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan')->insert([
            'namabahan' => 'Hazelnut Syrup',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
    }
}
