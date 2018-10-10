<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekapPembukuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_pembukuan', function (Blueprint $table) {
          $table->increments('id');
          $table->date('tanggalAwal');
          $table->date('tanggalAkhir');
          $table->string('totalPenjualan');
          $table->string('totalPembelianInventory');
          $table->string('totalAkhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekap_pembukuan');
    }
}
