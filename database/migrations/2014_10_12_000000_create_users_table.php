<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Traits\HasRoles;

class CreateUsersTable extends Migration
{
    use HasRoles;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->timestamps();
        });


        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('apellidop',100);
            $table->string('apellidom',100);
            $table->string('telefono',10);

            //user
            $table->unsignedBigInteger('idarea')->index();
            $table->foreign('idarea')->references('id')->on('areas');



            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');



            $table->rememberToken();
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('areas');
    }
}
