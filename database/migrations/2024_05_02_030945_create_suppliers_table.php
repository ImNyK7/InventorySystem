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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('kodesupp')->unique();
            $table->string('perusahaansupp');
            $table->string('kontaksupp');
            $table->string('kotasupp');
            $table->string('alamatsupp');
            $table->string('alamat2supp')->nullable();
            $table->bigInteger('notelponsupp');
            $table->integer('termsupp'); 
            $table->text('descsupp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
