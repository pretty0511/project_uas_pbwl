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
        Schema::create('tb_obat', function (Blueprint $table) {
            $table->increments('id_obat');
            $table->string('nama_obat');
            $table->text('Keterangan_obat');
            $table->date('tanggal_Expired');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_obat');
    }
};
