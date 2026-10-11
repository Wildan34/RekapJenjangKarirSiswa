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
        Schema::create('minats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained()->onDelete('cascade');
            $table->string('tahun_ajaran');
            $table->unique(['siswa_id', 'tahun_ajaran']);
            $table->enum('jenis',['kuliah','bekerja','wirausaha'])->default('kuliah');
            $table->string('kampus')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('perusahaan')->nullable();
            $table->string('posisi')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minats');
    }
};
