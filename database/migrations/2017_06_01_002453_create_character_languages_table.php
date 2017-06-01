<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('character_languages', function (Blueprint $table) {
		    $table->increments('id');
		    $table->unsignedInteger('character_id');
		    $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
		    $table->unsignedInteger('language_id');
		    $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');

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
		Schema::dropIfExists('character_languages');
    }
}
