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
        Schema::create('tb_obat_masuk', function (Blueprint $table) {
            $table->increments('id_masuk');
            $table->string('nama_obat');
            $table->string('stok_obat');
            $table->date('tanggal_masuk');
            $table->text('Keterangan_obat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_obat_masuk');
    }
};
