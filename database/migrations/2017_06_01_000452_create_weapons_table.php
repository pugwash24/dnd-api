<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('name');
	        $table->string('weapon_type');
	        $table->string('damage')->default('1d4');
	        $table->boolean('magic')->default(0);
	        $table->integer('modifier')->default(0);
	        $table->integer('player_id')->unsigned();
	        $table->foreign('player_id')->references('id')->on('users');
	        $table->integer('campaign_id')->unsigned();
	        $table->foreign('campaign_id')->references('id')->on('campaigns');

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
        Schema::dropIfExists('weapons');
    }
}
