<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '1',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '2',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '3',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '4',
            'produk_id' => '17',
            'harga' => '20000',
            'jumlah' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '4',
            'produk_id' => '7',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '5',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '6',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '7',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '8',
            'produk_id' => '11',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '8',
            'produk_id' => '14',
            'harga' => '20000',
            'jumlah' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '9',
            'produk_id' => '4',
            'harga' => '10000',
            'jumlah' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '10',
            'produk_id' => '17',
            'harga' => '20000',
            'jumlah' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '10',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
