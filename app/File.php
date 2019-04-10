<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'config' => 'object',
    ];


     protected $fillable = [
    	'name',
    	'filepath',
    	'config'

    ];
}
