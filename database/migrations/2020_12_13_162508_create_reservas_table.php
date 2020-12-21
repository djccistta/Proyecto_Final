<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId("paquete_id")->references("id")->on("paquetes");
            $table->string('nombrepersona');
            $table->string('apellidopersona');
            $table->string('telefono');
            $table->string('correo');
            $table->string('nroadultos');
            $table->integer('nroniños');
            $table->date('fecha');
            $table->integer('total');
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
        Schema::dropIfExists('reservas');
    }
}
