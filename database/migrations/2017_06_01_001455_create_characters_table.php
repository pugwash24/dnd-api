<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('name');
	        $table->integer('player_id')->unsigned();
	        $table->integer('race_id')->unsigned();
	        $table->integer('subrace_id')->unsigned();
	        $table->integer('class_id')->unsigned();
	        $table->integer('dual_class_id')->unsigned();
	        $table->integer('age')->nullable();
	        $table->integer('level')->default(1);
	        $table->integer('dual_class_level')->default(1);
	        $table->integer('experience')->default(0);
	        $table->string('height')->nullable();
	        $table->string('weight')->nullable();
	        $table->integer('str')->default(0);
	        $table->integer('dex')->default(0);
	        $table->integer('con')->default(0);
	        $table->integer('int')->default(0);
	        $table->integer('wis')->default(0);
	        $table->integer('cha')->default(0);
	        $table->integer('max_hp')->default(0);
	        $table->integer('current_hp')->default(0);
	        $table->integer('temp_hp')->default(0)->unsigned();
	        $table->integer('unarmoured_armour_class')->default(0);
	        $table->integer('speed')->default(0);
	        $table->string('alignment')->nullable();
	        $table->integer('proficiency_bonus')->default(2);
	        // TODO: spell slots

	        $table->foreign('player_id')->references('id')->on('users');
	        $table->foreign('race_id')->references('id')->on('races');
	        $table->foreign('subrace_id')->references('id')->on('subraces');
	        $table->foreign('class_id')->references('id')->on('character_classes');
	        $table->foreign('dual_class_id')->references('id')->on('character_classes');

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
        Schema::dropIfExists('characters');
    }
}
