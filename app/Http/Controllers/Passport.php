<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filename = [
        'name', 'email', 'number','date','office',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      
        'name', 'email', 'number','date','office',
    ];
}
