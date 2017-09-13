<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Blog extends Model
{
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }

    use HasApiTokens, Notifiable;

    protected $fillable = [
        'slug', 'categoria', 'title','content','tags','user_id',
    ];

    protected $hidden = [
        //
    ];


    /****************************/
    /*      Relationships       */
    /****************************/


    public function user(){
        return $this->hasOne('\App\User', 'id', 'user_id');
    }
}
