<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task_user extends Model
{
    protected $fillable = [
        'user_id', 'task_id'

    ];
    //
}
