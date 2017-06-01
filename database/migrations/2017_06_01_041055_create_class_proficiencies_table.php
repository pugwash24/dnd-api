<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassProficienciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('class_proficiencies', function (Blueprint $table) {
		    $table->increments('id');
		    $table->unsignedInteger('class_id');
		    $table->unsignedInteger('proficiency_id');

		    $table->foreign('class_id')->references('id')->on('character_classes')->onDelete('cascade');
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
		Schema::dropIfExists('class_proficiencies');
    }
}
