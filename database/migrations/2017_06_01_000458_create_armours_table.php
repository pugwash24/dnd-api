<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
	        $table->integer('player_id')->unsigned();
	        $table->text('description')->nullable();
	        $table->string('type');
	        $table->integer('armour_class')->unsigned();
	        $table->boolean('add_dex')->default(0);
	        $table->boolean('add_dex')->default(0);
	        $table->boolean('stealth_disadvantage')->default(0);
	        $table->integer('str_requirement')->unsigned()->nullable();
	        $table->integer('weight')->nullable();
	        $table->integer('modifier')->default(0);

	        $table->foreign('player_id')->references('id')->on('users');

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
        Schema::dropIfExists('armours');
    }
}
