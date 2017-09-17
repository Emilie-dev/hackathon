<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersInfo', function(Blueprint $table){
            $table->increments('id');
            $table->text('lastName');
            $table->text('firstName');
            $table->text('address');
            $table->text('city');
            $table->integer('zipCode');
            $table->text('region');
            $table->integer('home');
            $table->text('area');
            $table->string('house');
            $table->boolean('electricHeating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersInfo');
    }
}
