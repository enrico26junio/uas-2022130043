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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100); // Batasi panjang string
            $table->string('model', 100);
            $table->string('engine', 100)->nullable(); // Bisa nullable jika informasi mesin tidak wajib
            $table->decimal('price_per_day', 20, 5)->nullable(); // Gunakan decimal untuk nilai uang
            $table->string('image')->nullable(); // URL atau path gambar
            $table->unsignedInteger('quantity')->default(1); // Tidak boleh negatif
            $table->string('status', 50)->default('available'); // Batasi panjang untuk efisiensi
            $table->unsignedInteger('reduce')->default(0); // Penurunan harga, default 0
            $table->unsignedTinyInteger('stars')->default(0); // Gunakan tinyInteger untuk rating (0-255)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
