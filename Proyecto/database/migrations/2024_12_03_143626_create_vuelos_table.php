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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('aerolinea',150);
            $table->string('num_vuelo',10);
            $table->unsignedBigInteger('origen_id');
            $table->unsignedBigInteger('destino_id');
            $table->date('fecha_salida');
            $table->date('fecha_llegada');
            $table->time('hora_salida');
            $table->time('hora_llegada');
            $table->integer('max_pasajeros');
            $table->integer('pasajeros');
            $table->integer('precio');
            $table->foreign('destino_id')->references('id')->on('destinos');
            $table->foreign('origen_id')->references('id')->on('destinos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
