<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Muhamad Nazarudin',
            'email' => 'muhamadnazarudinahmad@gmail.com',
            'email_verified_at' => now(+8),
            'password' => Hash::make('1'),
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
    }
}
