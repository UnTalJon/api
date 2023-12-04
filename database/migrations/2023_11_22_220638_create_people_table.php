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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('schedule_id');
            $table->string('primer_nombre', 50);
            $table->string('segundo_nombre', 50)->nullable();
            $table->string('primer_apellido', 50);
            $table->string('segundo_apellido', 50);
            $table->string('curp', 18)->unique();
            $table->string('telefono', 10);

            $table->date('fecha_de_nacimiento');
            $table->string('lugar_de_nacimiento', 100);
            $table->string('direccion');
            $table->string('sexo');
            $table->string('genero', 50);
            $table->string('nacionalidad', 50);
            $table->string('ocupacion', 50);
            $table->string('estatus_migratorio', 50);
            $table->string('religion', 50);
            $table->string('escolaridad', 50);
            $table->string('lengua', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
