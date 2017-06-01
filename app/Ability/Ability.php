<?php

namespace App\Ability;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
	public $table = 'abilities';

	protected $fillable = [
		'name',
		'player_id',
		'campaign_id',
		'weapon_type',
		'description',
		'damage',
		'damage_type',
		'magic',
		'modifier',
		'normal_range',
		'max_range',
		'finesse',
		'heavy',
		'light',
		'loading',
		'reach',
		'2_handed',
		'versatile',
		'versatile_damage',
		'lance',
		'net'
	];

	/**
	 * If not a default armour, it has a creator
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function creator() {
		return $this->belongsTo(User::class, 'player_id');
	}

	/**
	 * If a user created armour, then it will be assigned to a campaign
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function campaign()
	{
		return $this->belongsTo(Campaign::class);
	}
}
