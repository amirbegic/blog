<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    public function user (){

        return $this->belongsToMany('\App\User', 'task_users','task_id', 'user_id' );
    }
    protected $fillable = [

        'name',

    ];
    //
}
