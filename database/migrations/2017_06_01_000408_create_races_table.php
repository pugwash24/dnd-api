<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('name');
	        $table->boolean('has_subrace')->default(0);
	        $table->integer('str_increase')->default(0);
	        $table->integer('dex_increase')->default(0);
	        $table->integer('con_increase')->default(0);
	        $table->integer('int_increase')->default(0);
	        $table->integer('wis_increase')->default(0);
	        $table->integer('cha_increase')->default(0);
	        $table->integer('speed')->default(0);
	        $table->string('size')->default('medium');
	        $table->boolean('has_darkvision')->default(0);
	        // TODO: Saving throw advantages need to be in here at some point

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
        Schema::dropIfExists('races');
    }
}
