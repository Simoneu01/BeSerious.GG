<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

/**
 * App\Models\Team
 *
 * @property int $id
 * @property string $name
 * @property string $tag
 * @property string $logo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $logo_url
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Player> $players
 * @property-read int|null $players_count
 * @property-read \RalphJSmit\Laravel\SEO\Models\SEO|null $seo
 *
 * @method static \Database\Factories\TeamFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Team extends Model
{
    use HasFactory;
    use HasSEO;

    /** @inheritdoc  */
    protected $fillable = [
        'name',
        'tag',
        'logo',
    ];

    public function getLogoUrlAttribute(): string
    {
        return Storage::disk('public')->url($this->logo);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class)
            ->withPivot('role', 'joined_at', 'detached_at')
            ->withTimestamps();
    }
}
