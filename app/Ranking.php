<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ranking extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'id_user','id_suplidor', 'valoracion',
    ];

    protected $hidden = [
        //
    ];
    
    
}