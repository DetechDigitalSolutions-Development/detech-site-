<?php

namespace App\Http\Controllers;
use App\Models\Team;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function show(Team $team)
    {
        // The framework automatically fetches the team member based on the route wildcard.
        // It returns a 404 if not found.
        
        return view('pages.teams.team_details', compact('team'));
    }
}
