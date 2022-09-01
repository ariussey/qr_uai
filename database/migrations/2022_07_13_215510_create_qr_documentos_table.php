<?php

use App\Models\Qr\qrDocumento;
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
        Schema::create('qr_documentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('qrdocumento_tipo_id');
            $table->unsignedBigInteger('programa_id');
            $table->date('fecha_emision');
            $table->text('documento_url');
            $table->string('codigo');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('persona_id');
            $table->enum('estado',[qrDocumento::INACTIVO, qrDocumento::ACTIVO])->default(qrDocumento::ACTIVO);

            $table->foreign('qrdocumento_tipo_id')->references('id')->on('qrdocumentos')->onDelete('cascade');
            $table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');

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
        Schema::dropIfExists('qr_documentos');
    }
};
