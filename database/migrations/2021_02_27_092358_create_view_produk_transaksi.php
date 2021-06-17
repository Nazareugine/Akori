<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewProdukTransaksi extends Migration
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
        CREATE VIEW `view_produk_transaksi` AS
            SELECT
                produk.id,
                CONCAT(
                    (SELECT
                        varian FROM varian
                        WHERE produk.varian_id=varian.id), ' ',
                        namaproduk) AS produk,
                produk.harga
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
            DROP VIEW IF EXISTS `view_produk_transaksi`;
        SQL;
    }
}
