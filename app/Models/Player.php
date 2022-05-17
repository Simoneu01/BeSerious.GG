<?php

namespace App\Models;

use App\Casts\Socials;
use App\DTO\Social;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

/**
 * App\Models\Player
 *
 * @property int $id
 * @property string $name
 * @property string|null $surname
 * @property string $nickname
 * @property string $img
 * @property string|null $nationality
 * @property int|null $current_team_id
 * @property array<int, Social>|null $socials
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $display_name
 * @property-read string $img_url
 * @property-read \RalphJSmit\Laravel\SEO\Models\SEO|null $seo
 * @property-read \App\Models\Team|null $team
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team[] $teams
 * @property-read int|null $teams_count
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\PlayerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Player newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Player newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Player query()
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereSocials($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereUserId($value)
 * @mixin \Eloquent
 */
class Player extends Model
{
    use HasFactory;
    use HasSEO;

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
