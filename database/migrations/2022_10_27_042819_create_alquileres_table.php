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
        Schema::create('alquileres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("clientes_id");
            $table->foreign("clientes_id")->references("id")->on("clientes");
            $table->unsignedBigInteger("vehiculos_id");
            $table->foreign("vehiculos_id")->references("id")->on("vehiculos");
            $table->date("fecha_inicial");
            $table->date("fecha_final");
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
        Schema::dropIfExists('alquileres');
    }
};
