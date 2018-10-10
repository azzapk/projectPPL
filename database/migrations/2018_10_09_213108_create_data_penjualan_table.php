<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penjualan', function (Blueprint $table) {
          $table->increments('id');
          $table->date('tanggalPenjualan');
          $table->integer('jumlahPenjualan');
          $table->string('hargaPenjualan');
          $table->string('pembeli');
          $table->date('tanggalPanen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_penjualan');
    }
}
