<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = "admins";
    //all fillable are avilable
    protected $guarded=[];
    //save timestamps
    public $timestamps = true;
    /*
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    */
}
