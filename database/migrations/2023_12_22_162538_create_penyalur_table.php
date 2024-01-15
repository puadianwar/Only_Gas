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
        Schema::create('penyalur', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penyalur');
            $table->string('alamat');
            $table->string('notelp');
            $table->string('no_kendaraan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyalur');
    }
};
