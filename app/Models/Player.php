<?php

namespace App\Models;

use App\Casts\Socials;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Player extends Model
{
    /** @inheritdoc  */
    protected $fillable = [
        'name',
        'surname',
        'nickname',
        'img',
        'nationality',
        'current_team_id',
        'socials',
        'user_id'
    ];

    /**
     * Cast attributes
     *
     * @var array<string, string>
     */
    protected $casts = [
        'socials' => Socials::class,
    ];

    public function getImgUrlAttribute(): string
    {
        return Storage::disk('public')->url($this->img);
    }

    public function getDisplayNameAttribute(): string
    {
        return $this->name . " '" . $this->nickname . "' " . $this->surname;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class, foreignKey: 'current_team_id');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class)
            ->withPivot('role', 'joined_at', 'detached_at')
            ->withTimestamps();
    }
}
