<?php

namespace App\Weapon;

use App\Campaign\Campaign;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    public $table = 'weapons';

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
	 * If not a default weapon, it has a creator
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function creator() {
    	return $this->belongsTo(User::class, 'player_id');
    }

	/**
	 * If a user created weapon, then it will be assigned to a campaign
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function campaign()
	{
		return $this->belongsTo(Campaign::class);
    }
}
