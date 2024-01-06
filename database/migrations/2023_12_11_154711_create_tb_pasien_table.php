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
        Schema::create('tb_pasien', function (Blueprint $table) {
            $table->increments('id_pasien');
            $table->string('nama_pasien');
            $table->date('tanggal_lahir');
            $table->text('alamat_pasien');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pasien');
    }
};
