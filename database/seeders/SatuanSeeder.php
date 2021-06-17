<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('satuan')->insert([
            'namasatuan' => 'Kilogram',
            'satuan' => 'Kg'
        ]);
        DB::table('satuan')->insert([
            'namasatuan' => 'Gram',
            'satuan' => 'gram'
        ]);
        DB::table('satuan')->insert([
            'namasatuan' => 'Pieces',
            'satuan' => 'Pcs'
        ]);
        DB::table('satuan')->insert([
            'namasatuan' => 'Piece',
            'satuan' => 'Pc'
        ]);
        DB::table('satuan')->insert([
            'namasatuan' => 'Buah',
            'satuan' => 'Buah'
        ]);
    }
}
