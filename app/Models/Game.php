<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;

/**
 * App\Models\Game
 *
 * @property int $id
 * @property string $gameshard_match_id
 * @property int $home_team_id
 * @property int $away_team_id
 * @property array $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Team $awayTeam
 * @property-read \App\Models\Team $homeTeam
 * @method static \Illuminate\Database\Eloquent\Builder|Game newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game query()
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereAwayTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereGameshardMatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereHomeTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

    public function homeTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    /**
     * @return Collection<int, Team>
     */
    public function teams(): Collection
    {
        return collect([$this->homeTeam])->add($this->awayTeam);
    }
}
