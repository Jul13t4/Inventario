<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_usuario')->index('id_usuario');
            $table->string('codigo');
            $table->integer('id_producto')->nullable('id_producto');
            $table->string('dependencia_soli');
            $table->integer('cantidad_soli');
            $table->integer('cantidad_entre');
            $table->string('recibido_por');
            $table->string('estado');
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
        Schema::dropIfExists('solicitudes');
    }
}
