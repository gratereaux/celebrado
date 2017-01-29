<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Suplidor_Categoria extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'id_suplidor', 'id_categoria',
    ];

    protected $hidden = [
        //
    ];


    /****************************/
    /*      Relationships       */
    /****************************/

    public function suplidor(){
        return $this->hasOne('\App\Suplidor', 'id', 'id_suplidor');
    }

    public function categoria(){
        return $this->hasOne('\App\Categoria', 'id', 'id_categoria');
    }
}
