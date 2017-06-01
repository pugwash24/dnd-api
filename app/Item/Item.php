<?php

namespace App\Item;

use App\Campaign\Campaign;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	public $table = 'items';

	protected $fillable = [
		'name',
		'description',
		'player_id',
		'campaign_id',
		'weapon_type',
		'weight'
	];

	/**
	 * If not a default item, it has a creator
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function creator() {
		return $this->belongsTo(User::class, 'player_id');
	}

	/**
	 * If a user created item, then it will be assigned to a campaign
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function campaign()
	{
		return $this->belongsTo(Campaign::class);
	}
}
