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
        Schema::create('record_barang_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('kodebrgmsk');
            $table->date('tanggalbrgmsk');
            $table->integer('jmlhbrgmsk');
            $table->foreignId('satuanbrg_id')->constrained('satuan_brgs')->onDelete('cascade');
            $table->foreignId('stokbarang_id')->constrained('stok_barangs')->onDelete('cascade');
            $table->decimal('hrgbeli', 15, 2);;
            $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade');
            $table->foreignId('supplier_id')->constrained('suppliers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record_barang_masuks');
    }
};
