<?php

use App\Match;
use App\Player;
use App\Substitute;
use App\Team;
use App\Tournament;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Team::truncate();
        Match::truncate();
        DB::table('player_team')->truncate();
        DB::table('substitute_team')->truncate();

        $usersQuantity = 100;
        $tournamentsQuantity = 3;
        $teamsQuantity = 12;
        $matchesQuantity = 20;

        factory(User::class, $usersQuantity)->create();

        factory(Tournament::class, $tournamentsQuantity)->create();

        factory(Team::class, $teamsQuantity)->create()->each(
            function ($team) {
                $players = Player::all()->random(mt_rand(1,5))->pluck('id');
                $substitutes = Substitute::all()->except($players->toArray())->random(mt_rand(1,2))->pluck('id');

                $team->players()->attach($players);
                $team->substitutes()->attach($substitutes);
            }
        );
        factory(Match::class, $matchesQuantity)->create();
    }
}
