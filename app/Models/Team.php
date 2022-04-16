<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Team extends Model
{
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
}
