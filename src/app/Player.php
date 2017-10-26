<?php

namespace App;

class Player extends User
{
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
