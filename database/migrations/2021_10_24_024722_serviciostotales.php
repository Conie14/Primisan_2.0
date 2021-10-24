<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Serviciostotales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviciostotales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',300);
            //area
            $table->unsignedBigInteger('idarea')->index();
            $table->foreign('idarea')->references('id')->on('areas');        
            
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
        Schema::dropIfExists('serviciostotales');
    }
}
