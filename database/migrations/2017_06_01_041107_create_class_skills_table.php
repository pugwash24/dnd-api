<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('class_skills', function (Blueprint $table) {
		    $table->increments('id');
		    $table->unsignedInteger('class_id');
		    $table->unsignedInteger('skill_id');

		    $table->foreign('class_id')->references('id')->on('character_classes')->onDelete('cascade');
		    $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');

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
		Schema::dropIfExists('class_skills');
    }
}
