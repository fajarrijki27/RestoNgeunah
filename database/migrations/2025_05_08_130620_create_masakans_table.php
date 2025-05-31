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
        Schema::create('masakans', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('nama_masakan');
            $table->decimal('harga', 10, 2);
            $table->enum('status_masakan', ['Tersedia', 'Habis'])->default('Tersedia');
            $table->enum('kategori_masakan', ['Minuman', 'Makanan'])->default('Makanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masakans');
    }
};
