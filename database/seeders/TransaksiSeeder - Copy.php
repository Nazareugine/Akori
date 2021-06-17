<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data ke tabel varian
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '36000',
            'date' => '2020-12-24',
            'time' => '10:59:00',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-24',
            'time' => '11:09:00',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '45000',
            'date' => '2020-12-24',
            'time' => '11:24:00',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '20000',
            'date' => '2020-12-24',
            'time' => '12:19:00',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-24',
            'time' => '13:39:00',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '45000',
            'date' => '2020-12-24',
            'time' => '14:04:00',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-24',
            'time' => '14:27:00',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '36000',
            'date' => '2020-12-24',
            'time' => '14:27:00',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-24',
            'time' => '15:03:00',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '35000',
            'date' => '2020-12-24',
            'time' => '15:07:00',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
