<?php

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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->engine="InnoDB"; 
            $table->id();
            $table->string('destinatario')->nullable();
            $table->string('estado')->nullable();
            $table->Integer('peso')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('contacto')->nullable();
            $table->bigInteger('vehiculo_id')->unsigned()->nullable();
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->bigInteger('servicios_id')->unsigned()->nullable();
            $table->foreign('servicios_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->bigInteger('precios_id')->unsigned()->nullable();
            $table->foreign('precios_id')->references('id')->on('precios')->onDelete('cascade');
            $table->bigInteger('cliente_id')->unsigned()->nullable();
            $table->foreign('cliente_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('pedidos');
    }
};
