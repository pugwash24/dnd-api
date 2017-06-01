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
	        $table->integer('player_id')->unsigned()->nullable();
	        $table->integer('campaign_id')->unsigned()->nullable();
	        $table->string('weapon_type');
	        $table->text('description')->nullable();
	        $table->string('damage')->default('1d4');
	        $table->string('damage_type');
	        $table->boolean('magic')->default(0);
	        $table->integer('modifier')->default(0);
	        $table->integer('normal_range')->nullable();
	        $table->integer('max_range')->nullable();
	        $table->boolean('finesse')->default(0);
	        $table->boolean('heavy')->default(0);
	        $table->boolean('light')->default(0);
	        $table->boolean('loading')->default(0);
	        $table->boolean('reach')->default(0);
	        $table->boolean('2_handed')->default(0);
	        $table->boolean('versatile')->default(0);
	        $table->string('versatile_damage')->nullable();
	        $table->boolean('lance')->default(0);
	        $table->boolean('net')->default(0);

	        $table->foreign('player_id')->references('id')->on('users');
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
