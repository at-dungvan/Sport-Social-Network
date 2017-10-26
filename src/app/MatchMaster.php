<?php

namespace App;

class MatchMaster extends User
{
    public function matches()
    {
        return $this->hasMany(Match::class);
    }
}
