<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Categoria extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'nombre','alias',
    ];

    protected $hidden = [
        //
    ];


    public function SuplidorporCategoria(){
        return $this->hasMany('\App\Suplidor_Categoria', 'id_categoria', 'id');
    }
}
