<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());

        DB::statement($this->createView());
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    private function createView(): string
    {
        return <<<SQL
        CREATE VIEW `view_produk` AS
            SELECT
                produk.id,
                (SELECT varian FROM varian
                WHERE produk.varian_id = varian.id
                ) AS varian,
                produk.namaproduk,
                (SELECT kategori FROM kategori
                WHERE produk.kategori_id = kategori.id
                ) AS kategori,
                produk.harga,
                produk.created_at,
                produk.updated_at
            FROM produk
        SQL;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function dropView(): string
    {
        return <<<SQL
          DROP VIEW IF EXISTS `view_produk`;
        SQL;
    }
}
