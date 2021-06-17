<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call([UserSeeder::class]);
        $this->call([VarianSeeder::class]);
        $this->call([KategoriSeeder::class]);
        $this->call([ProdukSeeder::class]);
        $this->call([TransaksiSeeder::class]);
        $this->call([DetailTransaksiSeeder::class]);
        $this->call([SatuanSeeder::class]);
        $this->call([BahanSeeder::class]);
        $this->call([BahanProdukSeeder::class]);
    }
}
