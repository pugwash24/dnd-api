<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('class_abilities', function (Blueprint $table) {
		    $table->increments('id');
		    $table->unsignedInteger('class_id');
		    $table->unsignedInteger('ability_id');

		    $table->foreign('class_id')->references('id')->on('character_classes')->onDelete('cascade');
		    $table->foreign('ability_id')->references('id')->on('abilities')->onDelete('cascade');

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
		Schema::dropIfExists('class_abilities');
    }
}
