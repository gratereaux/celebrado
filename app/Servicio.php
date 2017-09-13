<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Servicio extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'suplidor_id','categoria_id','tipo','metodo','descripcion','capacidad',
    ];

    protected $hidden = [
        //
    ];


    public function suplidor(){
        return $this->hasMany('\App\Suplidor', 'categoria_id', 'id');
    }

}
