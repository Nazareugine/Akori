<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BahanProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Hot Espresso
        DB::table('bahan_produk')->insert([
            'produk_id' => '1',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '1',
            'bahan_id' => '5',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Hot Americano
        DB::table('bahan_produk')->insert([
            'produk_id' => '2',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '2',
            'bahan_id' => '5',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '2',
            'bahan_id' => '7',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Americano
        DB::table('bahan_produk')->insert([
            'produk_id' => '3',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '3',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '3',
            'bahan_id' => '7',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '3',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Hot Cappucino
        DB::table('bahan_produk')->insert([
            'produk_id' => '4',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '4',
            'bahan_id' => '5',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '4',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Cappucino
        DB::table('bahan_produk')->insert([
            'produk_id' => '5',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '5',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '5',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '5',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Hot Latte
        DB::table('bahan_produk')->insert([
            'produk_id' => '6',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '6',
            'bahan_id' => '5',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '6',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Latte
        DB::table('bahan_produk')->insert([
            'produk_id' => '7',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '7',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '7',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '7',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Hot Mocha
        DB::table('bahan_produk')->insert([
            'produk_id' => '8',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '8',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '8',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '8',
            'bahan_id' => '11',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Mocha
        DB::table('bahan_produk')->insert([
            'produk_id' => '9',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '9',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '9',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '9',
            'bahan_id' => '11',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '9',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Hot Brown Sugar Latte
        DB::table('bahan_produk')->insert([
            'produk_id' => '10',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '10',
            'bahan_id' => '5',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '10',
            'bahan_id' => '4',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '10',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Brown Sugar Latte
        DB::table('bahan_produk')->insert([
            'produk_id' => '11',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '11',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '11',
            'bahan_id' => '4',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '11',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '11',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Hot V60
        DB::table('bahan_produk')->insert([
            'produk_id' => '12',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '12',
            'bahan_id' => '5',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Hot Chocolate
        DB::table('bahan_produk')->insert([
            'produk_id' => '13',
            'bahan_id' => '5',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '13',
            'bahan_id' => '11',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '13',
            'bahan_id' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '13',
            'bahan_id' => '7',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Chocolate
        DB::table('bahan_produk')->insert([
            'produk_id' => '14',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '14',
            'bahan_id' => '11',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '14',
            'bahan_id' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '14',
            'bahan_id' => '7',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '14',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Hot Matcha
        DB::table('bahan_produk')->insert([
            'produk_id' => '15',
            'bahan_id' => '5',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '15',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '15',
            'bahan_id' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '15',
            'bahan_id' => '14',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '15',
            'bahan_id' => '12',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Matcha
        DB::table('bahan_produk')->insert([
            'produk_id' => '16',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '16',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '16',
            'bahan_id' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '16',
            'bahan_id' => '14',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '16',
            'bahan_id' => '12',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '16',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Cookies & Cream
        DB::table('bahan_produk')->insert([
            'produk_id' => '17',
            'bahan_id' => '8',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '17',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '17',
            'bahan_id' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '17',
            'bahan_id' => '7',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '17',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '17',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Lemon Tea
        DB::table('bahan_produk')->insert([
            'produk_id' => '18',
            'bahan_id' => '13',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '18',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '18',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Hot Kopi Susu Lava Yo Lah
        DB::table('bahan_produk')->insert([
            'produk_id' => '19',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '19',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '19',
            'bahan_id' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '19',
            'bahan_id' => '5',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Kopi Susu Lava Yo Lah
        DB::table('bahan_produk')->insert([
            'produk_id' => '20',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '20',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '20',
            'bahan_id' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '20',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '20',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Kopi Ningrum
        DB::table('bahan_produk')->insert([
            'produk_id' => '21',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '21',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '21',
            'bahan_id' => '4',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '21',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '21',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Coffee Caramel Macchiato
        DB::table('bahan_produk')->insert([
            'produk_id' => '22',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '22',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '22',
            'bahan_id' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '22',
            'bahan_id' => '14',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '22',
            'bahan_id' => '15',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '22',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //Iced Salted Caramel
        DB::table('bahan_produk')->insert([
            'produk_id' => '23',
            'bahan_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '23',
            'bahan_id' => '6',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '23',
            'bahan_id' => '15',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('bahan_produk')->insert([
            'produk_id' => '23',
            'bahan_id' => '9',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
    }
}
