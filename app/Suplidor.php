<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Suplidor extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'correo', 'nombre', 'descripcion','direccion','ciudad','web','contacto','telefono','facebook','instagram','twitter','tipo','foto','capacidad',
    ];

    protected $hidden = [
        //
    ];


    /****************************/
    /*      Relationships       */
    /****************************/


    public function categoriasporsuplidor(){
        return $this->hasMany('\App\Suplidor_Categoria', 'id_suplidor', 'id');
    }

}