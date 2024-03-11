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
        Schema::create('grupos', function (Blueprint $table) {
            $table->bigIncrements('idGrupo');
            $table->double('nombre');
            $table->unsignedBigInteger('idDocente');
            $table->unsignedBigInteger('idAlumno');
            $table->unsignedBigInteger('idMateria');
            $table->timestamps();

            $table->foreign('idDocente')->references('idDocente')->on('docentes');
            $table->foreign('idAlumno')->references('idAlumno')->on('alumnos');
            $table->foreign('idMateria')->references('idMateria')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
