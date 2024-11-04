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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 10)->unique();
            $table->string('nisn', 10)->unique();
            $table->string('nama_lengkap', 50);
            $table->string('tmpt_lhr', 50);
            $table->date('tgl_lhr');
            $table->string('jk', 10);
            $table->string('email', 50);
            $table->string('alamat', 255);
            $table->string('no_telp', 15);
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
