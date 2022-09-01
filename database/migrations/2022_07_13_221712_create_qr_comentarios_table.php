<?php

use App\Models\Qr\qrComentario;
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
        Schema::create('qr_comentarios', function (Blueprint $table) {
            $table->id();
            $table->text('comentario');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('qrdocumento_id');
            $table->enum('estado',[qrComentario::INACTIVO, qrComentario::ACTIVO])->default(qrComentario::INACTIVO);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('qrdocumento_id')->references('id')->on('qrdocumentos')->onDelete('cascade');

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
        Schema::dropIfExists('qr_comentarios');
    }
};
