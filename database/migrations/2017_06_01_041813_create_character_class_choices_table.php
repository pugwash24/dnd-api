<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterClassChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('character_class_choices', function (Blueprint $table) {
		    $table->increments('id');
		    $table->unsignedInteger('character_id');
		    $table->unsignedInteger('choice_id');

		    $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
		    $table->foreign('choice_id')->references('id')->on('class_choices')->onDelete('cascade');

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
		Schema::dropIfExists('character_class_choices');
    }
}
