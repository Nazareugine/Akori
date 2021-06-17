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
        //Insert data ke tabel detail_transaksi
        //Transaksi Tanggal 21-Desember-2020
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '1',
            'produk_id' => '4',
            'harga' => '13000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '2',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '3',
            'produk_id' => '7',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '4',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '5',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '5',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '6',
            'produk_id' => '13',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '6',
            'produk_id' => '5',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '7',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '8',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '4',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '9',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '10',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '11',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '11',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '11',
            'produk_id' => '18',
            'harga' => '14000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '12',
            'produk_id' => '5',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '12',
            'produk_id' => '14',
            'harga' => '20000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '13',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '14',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '15',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '15',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '16',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '16',
            'produk_id' => '2',
            'harga' => '10000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '16',
            'produk_id' => '13',
            'harga' => '12000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '17',
            'produk_id' => '4',
            'harga' => '13000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '18',
            'produk_id' => '3',
            'harga' => '12000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '19',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '20',
            'produk_id' => '7',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '20',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '21',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '22',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '23',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '24',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '25',
            'produk_id' => '7',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '26',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '27',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '28',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '28',
            'produk_id' => '3',
            'harga' => '12000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '29',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '30',
            'produk_id' => '5',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '31',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '31',
            'produk_id' => '6',
            'harga' => '13000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '32',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '18',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '33',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '34',
            'produk_id' => '8',
            'harga' => '13000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '35',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '35',
            'produk_id' => '7',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '36',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '36',
            'produk_id' => '13',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '36',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);


        //Transaksi Tanggal 22-Desember-2020
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '37',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '37',
            'produk_id' => '20',
            'harga' => '10000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '38',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '38',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '39',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '40',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '41',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '5',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '42',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '43',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '44',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '5',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '45',
            'produk_id' => '4',
            'harga' => '13000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '46',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '46',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '47',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '10',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '48',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '49',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '50',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '50',
            'produk_id' => '5',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '51',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '52',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '52',
            'produk_id' => '14',
            'harga' => '20000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '53',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '54',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '55',
            'produk_id' => '3',
            'harga' => '12000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '56',
            'produk_id' => '18',
            'harga' => '14000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '57',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '58',
            'produk_id' => '3',
            'harga' => '12000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '59',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '59',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '59',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '60',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '60',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '61',
            'produk_id' => '4',
            'harga' => '13000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '62',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);

        //Transaksi Tanggal 23-Desember-2020
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '63',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '64',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '65',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '66',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '67',
            'produk_id' => '3',
            'harga' => '12000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '68',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '69',
            'produk_id' => '2',
            'harga' => '10000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '69',
            'produk_id' => '18',
            'harga' => '14000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '70',
            'produk_id' => '17',
            'harga' => '20000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '70',
            'produk_id' => '7',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '71',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '71',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '72',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '73',
            'produk_id' => '7',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '74',
            'produk_id' => '4',
            'harga' => '13000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '75',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '76',
            'produk_id' => '17',
            'harga' => '20000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '76',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '76',
            'produk_id' => '2',
            'harga' => '10000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '76',
            'produk_id' => '7',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '76',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '77',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '78',
            'produk_id' => '7',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '79',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '79',
            'produk_id' => '6',
            'harga' => '13000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '80',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '80',
            'produk_id' => '4',
            'harga' => '13000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);

        //Transaksi Tanggal 24-Desember-2020
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '81',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '82',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '83',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '84',
            'produk_id' => '17',
            'harga' => '20000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '84',
            'produk_id' => '7',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '85',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '86',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '87',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '88',
            'produk_id' => '11',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '88',
            'produk_id' => '14',
            'harga' => '20000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '89',
            'produk_id' => '4',
            'harga' => '10000',
            'jumlah' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '90',
            'produk_id' => '17',
            'harga' => '20000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '90',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '91',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '92',
            'produk_id' => '17',
            'harga' => '20000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '92',
            'produk_id' => '13',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '93',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '94',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '95',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '96',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '97',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '98',
            'produk_id' => '9',
            'harga' => '15000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '99',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '2',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '100',
            'produk_id' => '21',
            'harga' => '18000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '101',
            'produk_id' => '17',
            'harga' => '20000',
            'jumlah' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => '101',
            'produk_id' => '20',
            'harga' => '15000',
            'jumlah' => '3',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
    }
}
