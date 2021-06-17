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
        //Insert data ke tabel transaksi
        //Transaksi Tanggal 21-Desember-2020
        //1
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '13000',
            'date' => '2020-12-21',
            'time' => '11:04:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //2
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '11:21:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //3
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '45000',
            'date' => '2020-12-21',
            'time' => '12:21:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //4
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '12:33:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //5
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '33000',
            'date' => '2020-12-21',
            'time' => '12:43:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //6
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-21',
            'time' => '12:44:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //7
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '12:48:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //8
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '60000',
            'date' => '2020-12-21',
            'time' => '13:46:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //9
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '45000',
            'date' => '2020-12-21',
            'time' => '14:04:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //10
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '14:35:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //11
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '47000',
            'date' => '2020-12-21',
            'time' => '15:05:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //12
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '55000',
            'date' => '2020-12-21',
            'time' => '15:59:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //13
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-21',
            'time' => '17:02:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //14
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '18000',
            'date' => '2020-12-21',
            'time' => '17:34:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //15
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '33000',
            'date' => '2020-12-21',
            'time' => '17:44:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //16
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '62000',
            'date' => '2020-12-21',
            'time' => '18:04:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //17
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '13000',
            'date' => '2020-12-21',
            'time' => '18:26:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //18
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '12000',
            'date' => '2020-12-21',
            'time' => '18:33:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //19
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '18:37:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //20
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-21',
            'time' => '18:38:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //21
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '18:52:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //22
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-21',
            'time' => '18:54:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //23
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '18:58:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //24
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '19:14:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //25
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '19:44:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //26
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '20:55:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //27
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '20:55:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //28
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '27000',
            'date' => '2020-12-21',
            'time' => '21:10:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //29
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '18000',
            'date' => '2020-12-21',
            'time' => '21:10:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //30
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '21:46:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //31
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '28000',
            'date' => '2020-12-21',
            'time' => '21:57:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //32
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '29000',
            'date' => '2020-12-21',
            'time' => '22:44:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //33
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-21',
            'time' => '23:02:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //34
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '13000',
            'date' => '2020-12-21',
            'time' => '23:05:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //35
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-21',
            'time' => '23:12:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //36
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '75000',
            'date' => '2020-12-21',
            'time' => '23:40:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);

        //Transaksi Tanggal 22-Desember-2020
        //1
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '25000',
            'date' => '2020-12-22',
            'time' => '19:29:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //2
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-22',
            'time' => '20:00:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //3
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-22',
            'time' => '20:36:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //4
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-22',
            'time' => '20:54:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //5
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '75000',
            'date' => '2020-12-22',
            'time' => '21:00:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //6
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '18000',
            'date' => '2020-12-22',
            'time' => '21:45:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //7
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-22',
            'time' => '21:46:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //8
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '75000',
            'date' => '2020-12-22',
            'time' => '21:57:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //9
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '13000',
            'date' => '2020-12-22',
            'time' => '22:01:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //10
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '63000',
            'date' => '2020-12-22',
            'time' => '22:08:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //11
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '150000',
            'date' => '2020-12-22',
            'time' => '22:33:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //12
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-22',
            'time' => '22:33:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //13
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-22',
            'time' => '22:50:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //14
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '45000',
            'date' => '2020-12-22',
            'time' => '22:56:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //15
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-22',
            'time' => '23:00:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //16
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '35000',
            'date' => '2020-12-22',
            'time' => '23:02:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //17
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-22',
            'time' => '23:04:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //18
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-22',
            'time' => '23:05:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //19
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-22',
            'time' => '23:06:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //20
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '14000',
            'date' => '2020-12-22',
            'time' => '23:07:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //21
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-22',
            'time' => '23:08:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //22
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '12000',
            'date' => '2020-12-22',
            'time' => '23:16:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //23
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '111000',
            'date' => '2020-12-22',
            'time' => '23:19:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //24
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '45000',
            'date' => '2020-12-22',
            'time' => '23:20:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //25
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '13000',
            'date' => '2020-12-22',
            'time' => '23:25:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //26
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-22',
            'time' => '23:35:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);

        //Transaksi Tanggal 23-Desember-2020
        //1
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-23',
            'time' => '12:09:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //2
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '45000',
            'date' => '2020-12-23',
            'time' => '12:09:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //3
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-23',
            'time' => '13:44:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //4
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-23',
            'time' => '14:07:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //5
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '12000',
            'date' => '2020-12-23',
            'time' => '14:35:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //6
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-23',
            'time' => '14:43:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //7
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '24000',
            'date' => '2020-12-23',
            'time' => '14:50:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //8
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '35000',
            'date' => '2020-12-23',
            'time' => '16:02:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //9
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '33000',
            'date' => '2020-12-23',
            'time' => '16:50:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //10
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '18000',
            'date' => '2020-12-23',
            'time' => '17:26:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //11
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '18000',
            'date' => '2020-12-23',
            'time' => '17:37:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //12
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '13000',
            'date' => '2020-12-23',
            'time' => '18:31:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //13
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-23',
            'time' => '18:34:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //14
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '90000',
            'date' => '2020-12-23',
            'time' => '18:40:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //15
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-23',
            'time' => '18:43:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //16
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-23',
            'time' => '21:53:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //17
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '43000',
            'date' => '2020-12-23',
            'time' => '22:49:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //18
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '43000',
            'date' => '2020-12-23',
            'time' => '23:23:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);


        //Transaksi Tanggal 24-Desember-2020
        //1
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '36000',
            'date' => '2020-12-24',
            'time' => '10:59:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //2
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-24',
            'time' => '11:09:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //3
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '45000',
            'date' => '2020-12-24',
            'time' => '11:24:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //4
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '20000',
            'date' => '2020-12-24',
            'time' => '12:19:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //5
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-24',
            'time' => '13:39:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //6
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '45000',
            'date' => '2020-12-24',
            'time' => '14:04:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //7
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-24',
            'time' => '14:27:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //8
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '36000',
            'date' => '2020-12-24',
            'time' => '14:27:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //9
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-24',
            'time' => '15:03:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //10
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '35000',
            'date' => '2020-12-24',
            'time' => '15:07:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //11
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-24',
            'time' => '15:43:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //12
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '35000',
            'date' => '2020-12-24',
            'time' => '16:35:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //13
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-24',
            'time' => '16:43:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //14
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-24',
            'time' => '17:05:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //15
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-24',
            'time' => '17:08:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //16
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '36000',
            'date' => '2020-12-24',
            'time' => '17:30:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //17
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-24',
            'time' => '18:03:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //18
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '15000',
            'date' => '2020-12-24',
            'time' => '18:34:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //19
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '30000',
            'date' => '2020-12-24',
            'time' => '20:43:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //20
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '18000',
            'date' => '2020-12-24',
            'time' => '21:05:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
        //21
        DB::table('transaksi')->insert([
            'kodetransaksi' => 'NULL',
            'total' => '65000',
            'date' => '2020-12-24',
            'time' => '21:52:00',
            'user_id' => '1',
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
    }
}
