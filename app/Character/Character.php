<?php

namespace App\Character;

use App\CharacterClass\CharacterClass;
use App\Race\Race;
use App\Subrace\Subrace;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
	public $table = 'characters';

	protected $fillable = [
		'name',
		'race_id',
		'class_id',
		'dual_class_id',
		'age',
		'level',
		'dual_class_level',
		'experience',
		'height',
		'weight',
		'str',
		'dex',
		'con',
		'int',
		'wis',
		'cha',
		'max_hp',
		'current_hp',
		'temp_hp',
		'unarmoured_armour_class',
		'speed',
		'alignment',
		'proficiency_bonus',
	];

	/**
	 * A Character belongs to a Player (User)
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(User::class, 'player_id');
	}

	/**
	 * A Character has one race
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function race()
	{
		return $this->hasOne(Race::class);
	}

	/**
	 * A Character may have a subrace
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function subrace()
	{
		return $this->hasOne(Subrace::class);
	}

	/**
	 * A Character has a class
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function class()
	{
		return $this->hasOne(CharacterClass::class, 'class_id');
	}

	/**
	 * A Character may dual class
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function dualClass()
	{
		return $this->hasOne(CharacterClass::class, 'dual_class_id');
	}
}
