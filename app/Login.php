<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'user';

    protected $fillable = [
        'username',
        'password',
        'email',
        'level',
        'validasi',
        'token'
    ];

    public $timestamps = false;
}
