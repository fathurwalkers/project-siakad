<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'user';

    protected $fillable = [
        'username',
        'password',
        'level'
    ];

    public $timestamps = false;
}
