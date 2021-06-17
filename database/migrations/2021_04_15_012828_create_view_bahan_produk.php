<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewBahanProduk extends Migration
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
        CREATE VIEW `view_bahan_produk` AS
            SELECT
            CONCAT(varian, " ", namaproduk) as produk,
            namabahan
            FROM
            bahan_produk
            INNER JOIN bahan ON bahan_produk.bahan_id = bahan.id
            INNER JOIN produk ON bahan_produk.produk_id = produk.id
            INNER JOIN varian ON produk.varian_id = varian.id
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
            DROP VIEW IF EXISTS `view_bahan_produk`;
        SQL;
    }
}
