<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /** @inheritdoc  */
    protected $fillable = [
        'gameshard_match_id',
        'home_team_id',
        'away_team_id',
        'data'
    ];

    protected $casts = [
        'data' => 'json'
    ];

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    public function teams()
    {
        return collect([$this->homeTeam])->add($this->awayTeam);
    }
}
