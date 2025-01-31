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
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('pekerjaan_kategori', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Pekerjaan::class)->constrained('pekerjaan')->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Kategori::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoris');
        Schema::dropIfExists('pekerjaan_kategori');
    }
};
