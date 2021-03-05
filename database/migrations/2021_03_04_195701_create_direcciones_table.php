<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->string('nombre');
            $table->string('telefono',20);

            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id')->on('estados')->onDelete('cascade');

            $table->unsignedBigInteger('id_municipio');
            $table->foreign('id_municipio')->references('id')->on('municipios')->onDelete('cascade');

            $table->unsignedBigInteger('id_parroquia');
            $table->foreign('id_parroquia')->references('id')->on('parroquias')->onDelete('cascade');

            $table->string('direccion');    

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
        Schema::dropIfExists('direcciones');
    }
}
