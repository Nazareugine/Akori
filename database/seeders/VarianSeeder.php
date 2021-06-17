<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data ke tabel varian
        DB::table('varian')->insert([
            'varian' => 'Hot'
        ]);
        DB::table('varian')->insert([
            'varian' => 'Iced'
        ]);
    }
}
