<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterProficienciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('character_proficiencies', function (Blueprint $table) {
		    $table->increments('id');
		    $table->unsignedInteger('character_id');
		    $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
		    $table->unsignedInteger('proficiency_id');
		    $table->foreign('proficiency_id')->references('id')->on('proficiencies')->onDelete('cascade');

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
		Schema::dropIfExists('character_proficiencies');
    }
}
