<?php

namespace App\Race;

use App\Subrace\Subrace;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    public $table = 'races';

    protected $fillable = [
    	'name',
	    'has_subrace',
	    'str_increase',
	    'dex_increase',
	    'con_increase',
	    'int_increase',
	    'wis_increase',
	    'cha_increase',
	    'speed',
	    'size',
	    'has_darkvision'
    ];

	/**
	 * Race may have several subraces
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function subraces()
	{
		return $this->hasMany(Subrace::class);
	}
}
