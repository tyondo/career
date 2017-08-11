<?php

namespace Tyondo\Career\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function career()
    {
      return $this->hasMany(config('tcareer.namespace').'Career');
    }
    /**
     * Get the number of posts by a user.
     *
     * @param $userId
     *
     * @return bool
     */
    public static function careerCount($userId)
    {
        return Career::where('user_id', $userId)->get()->count();
    }
}
