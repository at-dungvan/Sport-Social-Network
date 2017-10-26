<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'name',
        'place',
        'date',
        'time',
        'team0_id',
        'team1_id'
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function master()
    {
        return $this->belongsTo(MatchMaster::class);
    }
}
