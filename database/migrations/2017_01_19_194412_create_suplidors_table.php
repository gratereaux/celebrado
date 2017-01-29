<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuplidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplidors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correo')->unique();
            $table->string('nombre');
            $table->longText('descripcion');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('web');
            $table->string('contacto');
            $table->string('telefono');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('foto');
            
            $table->string('tipo');
            $table->integer('capacidad');

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
        Schema::dropIfExists('suplidors');
    }
}
