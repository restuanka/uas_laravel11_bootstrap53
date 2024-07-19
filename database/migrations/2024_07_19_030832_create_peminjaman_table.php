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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->bigInteger('id_peminjam');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->unsignedBigInteger('id_buku');
            $table->unsignedBigInteger('id_anggota');
            $table->string('status','10');
            $table->timestamps();

            $table->unique('id_buku');
            $table->unique('id_anggota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
