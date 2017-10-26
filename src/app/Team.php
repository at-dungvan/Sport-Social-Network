<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'player0_id',
        'player1_id',
        'player2_id',
        'player3_id',
        'player4_id',
        'sub0_id',
        'sub1_id'
    ];

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }

    public function substitutes()
    {
        return $this->belongsToMany(Substitute::class);
    }

    public function matches()
    {
        return $this->belongsToMany(Match::class);
    }
}
