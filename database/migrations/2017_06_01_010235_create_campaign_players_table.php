<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('campaign_players', function (Blueprint $table) {
		    $table->increments('id');
		    $table->unsignedInteger('campaign_id');
		    $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
		    $table->unsignedInteger('player_id');
		    $table->foreign('player_id')->references('id')->on('users')->onDelete('cascade');

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
		Schema::dropIfExists('campaign_players');
    }
}
