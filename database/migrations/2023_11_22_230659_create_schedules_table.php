<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * id INT auto_increment primary key,
     */
    public function up(): void
    {
        
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();

            $table->string('localidad');
            $table->string('folio_unico', 50)->unique();
            $table->string('carpeta_investigacion', 50);
            $table->date('fecha_de_creacion')->default(now());
            $table->string('ubicacion_de_creacion', 50);

            $table->string('titulo');
            $table->text('contenido');
            $table->text('plantamiento_del_problema');
            $table->text('particularidades_del_lugar');
            $table->text('metodologia');
            $table->text('estrategia_de_intervencion');
            $table->text('consideraciones_finales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('schedules');
    }
};
