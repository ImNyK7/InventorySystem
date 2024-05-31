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
        Schema::create('record_barang_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('kodebrgklr');
            $table->date('tanggalbrgklr');
            $table->integer('jmlhbrgklr');
            $table->foreignId('satuanbrg_id');
            $table->string('namabrgklr');
            $table->decimal('hrgjual', 15, 2);;
            $table->foreignId('kategori_id');
            $table->foreignId('customer_id');
            $table->json('noseribrgklr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record_barang_keluars');
    }
};
