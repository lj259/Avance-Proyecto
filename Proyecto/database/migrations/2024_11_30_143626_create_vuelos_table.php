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
            $table->string('origen',150);
            $table->string('destino',150);
            //llave foranea hacia otra tabla
            // hacer tabla de escala que tenga esta de llave foranea
            $table->date('fecha_salida');//Horario de salida
            $table->date('fecha_llegada');//Horario de llegada
            $table->time('hora_salida');//Horario de salida
            $table->time('hora_llegada');//Horario de llegada
            $table->integer('max_pasajeros');
            $table->integer('pasajeros');//operacion contra max_pasajeros para disponibilidad
            $table->integer('precio');
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
