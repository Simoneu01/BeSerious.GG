<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamController extends Controller
{
    public function show(Team $team)
    {
        return view('team.view', compact('team'));
    }
}
