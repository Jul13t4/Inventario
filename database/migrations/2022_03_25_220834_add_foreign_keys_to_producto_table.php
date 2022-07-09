<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('producto', function (Blueprint $table) {
            $table->foreign(['id_solicitud'], 'producto_ibfk_2')->references(['id'])->on('solicitudes')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_clasificacion'], 'producto_ibfk_3')->references(['id'])->on('clasificacion_productos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('producto', function (Blueprint $table) {
            $table->dropForeign('producto_ibfk_2');
            $table->dropForeign('producto_ibfk_3');
        });
    }
}
