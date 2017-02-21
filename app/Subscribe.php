<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Subscribe extends Model
{
    use HasApiTokens, Notifiable;

    protected $table = 'subscribe';


    protected $fillable = [
        'name', 'email', 'instagram',
    ];

    protected $hidden = [
        //
    ];
}
