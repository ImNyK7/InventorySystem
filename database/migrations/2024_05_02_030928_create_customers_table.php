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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('kodecust')->unique();
            $table->string('perusahaancust');
            $table->string('kontakcust');
            $table->string('kotacust');
            $table->string('alamatcust');
            $table->string('alamat2cust')->nullable();
            $table->string('notelponcust');
            $table->integer('termcust');
            $table->char('limitcust');
            $table->text('desccust')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
