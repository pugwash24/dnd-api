<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubracesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subraces', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('name');
	        $table->integer('race_id')->unsigned();
	        $table->foreign('race_id')->references('id')->on('races');
	        $table->integer('str_increase')->default(0);
	        $table->integer('dex_increase')->default(0);
	        $table->integer('con_increase')->default(0);
	        $table->integer('int_increase')->default(0);
	        $table->integer('wis_increase')->default(0);
	        $table->integer('cha_increase')->default(0);
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
        Schema::dropIfExists('subraces');
    }
}
