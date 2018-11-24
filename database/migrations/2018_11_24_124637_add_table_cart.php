<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartshops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idtransaksi')->unsigned();
            $table->foreign('idtransaksi')->references('id')->on('transaksis')->onUpdate('cascade');
            $table->integer('idbarang')->unsigned();
            $table->foreign('idbarang')->references('idbarang')->on('barangs')->onUpdate('cascade');
            $table->integer('jumlah');
            $table->integer('totalharga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartshops');
    }
}
