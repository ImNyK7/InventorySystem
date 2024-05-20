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
            $table->foreignId('satuanbrg_id');
            $table->string('namabrgmsk');
            $table->char('hrgbeli');
            $table->foreignId('kategori_id');
            $table->foreignId('supplier_id');
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
