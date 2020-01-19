<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cacheGet($key, $default = null)
    {
        return cache()->get($this->cacheKey($key), $default);
    }

    public function cacheHas($key)
    {
        return cache()->has($this->cacheKey($key));
    }

    public function cachePut($key, $value, $ttl = null)
    {
        return cache()->put($this->cacheKey($key), $value, $ttl);
    }

    public function cacheKey($key)
    {
        return 'user-'.$this->id.'.'.$key;
    }
}
