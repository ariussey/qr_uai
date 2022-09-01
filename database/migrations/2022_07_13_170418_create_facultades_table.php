<?php

use App\Models\Facultade;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facultades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_facultad');
            $table->string('codigo_facultad');
            $table->string('inicial_facultad');
            $table->enum('estado',[Facultade::INACTIVO,Facultade::ACTIVO])->default(Facultade::ACTIVO);
            
            $table->unsignedBigInteger('sede_id');
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facultades');
    }
};
