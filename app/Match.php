<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'winning_team',
        'losing_team',
        'game_date',
        'cups_left',
        'overtime',
        'comments',
    ];
}
