<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'hometown',
        'height',
        'age'
    ];
}
