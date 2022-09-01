<?php

use App\Models\Qr\qrDocumento_tipo;
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
        Schema::create('qr_documento_tipos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento');
            $table->enum('estado',[qrDocumento_tipo::INACTIVO, qrDocumento_tipo::ACTIVO])->default(qrDocumento_tipo::ACTIVO);
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
        Schema::dropIfExists('qr_documento_tipos');
    }
};
