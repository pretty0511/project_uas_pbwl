<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->integer('pas_id')->unsigned();
            $table->integer('obat_id')->unsigned();
            $table->text('jumlah_transaksi');
            $table->timestamps();
        });

        Schema::table('tb_transaksi', function (Blueprint $table) {         
            $table->foreign('pas_id')->references('id_pasien')->on('tb_pasien')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('obat_id')->references('id_obat')->on('tb_obat')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};
