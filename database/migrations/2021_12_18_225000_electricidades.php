<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Electricidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electricidades', function (Blueprint $table) {
            $table->id();

            $table->string('nombre',100);
            $table->string('email');
            $table->string('telefono',10);
            $table->string('servicio',200); //se iguala a el servicio 2 que es construccion**** string = 2
            $table->string('mensaje',600);

            //union de tabla servicios totales
            $table->unsignedBigInteger('idservicio')->index();
            $table->foreign('idservicio')->references('id')->on('serviciostotales');

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
        Schema::dropIfExists('electricidades');
    }
}
