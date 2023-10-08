<?php

namespace App\Models;

use App\Casts\Socials;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\Staff
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $role
 * @property string $img
 * @property array<int, Social>|null $socials
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $full_name
 * @property-read string $img_url
 * @method static \Database\Factories\StaffFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Staff newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Staff newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Staff query()
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereSocials($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Staff extends Model
{
    use HasFactory;

    /** @inheritdoc  */
    protected $fillable = [
        'name',
        'surname',
        'role',
        'img',
        'socials',
    ];

    /**
     * Cast attributes
     *
     * @var array<string, string>
     */
    protected $casts = [
        'socials' => Socials::class,
    ];

    public function getFullNameAttribute(): string
    {
        return $this->name . ' ' . $this->surname;
    }

    public function getImgUrlAttribute(): string
    {
        return Storage::disk('public')->url($this->img);
    }
}
