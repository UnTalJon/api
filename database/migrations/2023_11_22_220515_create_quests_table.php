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
        Schema::create('quests', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('schedule_id');
            $table->unsignedInteger('collective_id');

            $table->string('fecha_de_creacion');
            $table->string('ubicacion_de_creacion', 50);
            $table->date('fecha_inicial');
            $table->date('fecha_final');

            $table->string('titulo_plan_de_busqueda');
            $table->integer('extension_en_metros');
            $table->string('zona_utm', 50);
            $table->string('banda_utm', 50);
            $table->string('este_utm', 50);
            $table->string('norte_utm', 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quests');
    }
};
