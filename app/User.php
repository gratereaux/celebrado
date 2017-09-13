<?php

namespace App;

use Laravel\Passport\HasApiTokens; // https://laracasts.com/series/whats-new-in-laravel-5-3/episodes/13
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function blog(){
        return $this->hasMany('\App\Blog', 'user_id', 'id');
    }
}
