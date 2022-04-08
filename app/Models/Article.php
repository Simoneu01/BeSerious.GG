<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /** @inheritdoc  */
    protected $fillable = [
        'title',
        'body',
        'type',
        'img',
        'author',
        'author_img',
        'author_link'
    ];
}
