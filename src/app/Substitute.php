<?php

namespace App;

class Substitute extends User
{
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
