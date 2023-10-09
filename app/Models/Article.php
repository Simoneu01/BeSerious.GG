<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

/**
 * App\Models\Article
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string|null $img
 * @property string|null $url
 * @property string|null $author
 * @property string|null $author_img
 * @property string|null $author_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \RalphJSmit\Laravel\SEO\Models\SEO $seo
 *
 * @method static \Database\Factories\ArticleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereAuthorImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereAuthorLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUrl($value)
 *
 * @mixin \Eloquent
 */
class Article extends Model
{
    use HasFactory;
    use HasSEO;

    /** @inheritdoc  */
    protected $fillable = [
        'title',
        'body',
        'img',
        'url',
        'author',
        'author_img',
        'author_link',
    ];
}
