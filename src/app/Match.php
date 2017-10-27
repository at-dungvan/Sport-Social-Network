<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    const ITEMS_PER_PAGE = 10;

    protected $fillable = [
        'name',
        'place',
        'date',
        'time',
        'team0_id',
        'team1_id'
    ];

    public function team0()
    {
        return $this->belongsTo(Team::class);
    }

    public function team1()
    {
        return $this->belongsTo(Team::class);
    }

    public function matchMaster()
    {
        return $this->belongsTo(MatchMaster::class);
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
