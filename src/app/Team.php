<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    const ITEMS_PER_PAGE = 10;

    protected $fillable = [
        'name',
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
