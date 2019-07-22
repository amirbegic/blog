<?php

namespace App;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class cities extends Model
{
    //
    public function users()
    {
        return $this->hasMany('App\User');

    }

    public function country(){

        return $this->belongsTo('App\countries', 'countriesID');
    }

    protected $fillable = ['name', 'countriesID'];


}
