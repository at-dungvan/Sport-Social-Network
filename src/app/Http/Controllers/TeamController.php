<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use function response;

class TeamController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::with('players')->with('substitutes')->paginate(Team::ITEMS_PER_PAGE);

        return $this->showAll($teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['team_master_id'] = $request->user()->id;
//        $team = Team::create($data);
        if($request->has('players')){
            $players = $request->players;
            $team->players()->attach($players);
        }
        if($request->has('substitute')){
            $substitutes = $request->substitutes;
            $team->substitutes()->attach($substitutes);
        }

        return $this->showOne($team->with('players')->with('substitutes')->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $team = $team->where('id', $team->id)->with('players')->with('substitutes')->get()[0];

        return $this->showOne($team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $data = [];
        if($request->has('name')){
            $team->update($data);
        }

        if($request->has('players')){
            $team->players()->attach($request->players);
        }

        if($request->has('substitutes')) {
            $team->substitutes()->attach($request->substitutes);
        }

        return $this->showOne($team);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
