<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('character_spells', function (Blueprint $table) {
		    $table->increments('id');
		    $table->unsignedInteger('character_id');
		    $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
		    $table->unsignedInteger('spell_id');
		    $table->foreign('spell_id')->references('id')->on('spells')->onDelete('cascade');

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
		Schema::dropIfExists('character_spells');
    }
}
