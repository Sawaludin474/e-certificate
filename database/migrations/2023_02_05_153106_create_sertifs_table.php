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
        Schema::create('sertifs', function (Blueprint $table) {
            $table->id();
            $table->integer('desain')->default(1);
            $table->string('ceo');
            $table->string('nama_pengajar');
            $table->string('instansi_pengajar');
            $table->string('tempat');
            $table->date('tanggal');
            $table->text('ttd_pimpinan')->nullable();
            $table->text('ttd_pengajar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifs');
    }
};
