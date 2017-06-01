<?php

namespace App;

use App\Character\Character;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	/**
	 * A Player (User) can have many Characters
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function characters()
	{
		return $this->hasMany(Character::class);
    }
}
