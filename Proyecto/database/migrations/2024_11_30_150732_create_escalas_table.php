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
        Schema::create('escalas', function (Blueprint $table) {
            $table->id();
            $table->string( 'destino',150);
            $table->integer('hora_salida');//formato 24hr, convertir a 12hr
            $table->integer('hora_llegada');//formato 24hr, convertir a 12hr
            $table->unsignedBigInteger('vuelo_id');
            $table->foreign('vuelo_id')->references('id')->on('vuelos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escalas');
    }
};
