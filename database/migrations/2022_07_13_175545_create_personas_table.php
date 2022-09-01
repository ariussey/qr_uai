<?php

use App\Models\Persona;
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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doc_ident_tipo_id');
            $table->string('n_doc_ident');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('nombres');
            $table->unsignedBigInteger('genero_id');
            $table->string('email')->nullable();
            $table->string('celular')->nullable();
            $table->enum('estado',[Persona::INACTIVO,Persona::ACTIVO])->default(Persona::ACTIVO);

            $table->foreign('doc_ident_tipo_id')->references('id')->on('doc_ident_tipos')->onDelete('cascade');
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');

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
        Schema::dropIfExists('personas');
    }
};
