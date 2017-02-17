<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CrearePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre')->required();
            $table->string('Apellidos')->required();
            $table->date('Fecha_de_Nacimiento');
            $table->enum('Sexo', ['M', 'F']);
            $table->integer('Cedula')->unique()->required();
            $table->integer('Pasaporte');
            $table->text('Direccion');
            $table->integer('Provincia_id')->unsigned()->index();
            $table->foreign('Provincia_id')->references('id')->on('Provincias')->onDelete('cascade');
            $table->string('Telefono');
            $table->string('Correo');
            $table->string('Foto');
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
        //
    }
}
