<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'player1',
        'player2',
        'wins',
        'losses'
    ];
}
