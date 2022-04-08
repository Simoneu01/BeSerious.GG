<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Staff extends Model
{
    use HasFactory;

    /** @inheritdoc  */
    protected $fillable = [
        'name',
        'surname',
        'role',
        'img',
        'socials'
    ];

    /**
     * Cast attributes
     *
     * @var array<string, string>
     */
    protected $casts = [
        'socials' => 'array',
    ];

    public function getFullNameAttribute(): string
    {
        return $this->name . ' ' . $this->surname;
    }

    public function getImgUrlAttribute()
    {
        return Storage::disk('public')->url($this->img);
    }
}
