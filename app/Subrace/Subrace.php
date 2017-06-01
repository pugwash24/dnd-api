<?php

namespace App\Subrace;

use App\Race\Race;
use Illuminate\Database\Eloquent\Model;

class Subrace extends Model
{
    public $table = 'subraces';

	/**
	 * A Subrace has a parent race
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function race()
	{
		return $this->belongsTo(Race::class);
    }
}
