<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('class_spells', function (Blueprint $table) {
		    $table->increments('id');
		    $table->unsignedInteger('character_id');
		    $table->unsignedInteger('armour_id');

		    $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
		    $table->foreign('armour_id')->references('id')->on('armours')->onDelete('cascade');

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
		Schema::dropIfExists('class_spells');
    }
}
