<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use JoelButcher\Socialstream\ConnectedAccount as SocialstreamConnectedAccount;
use JoelButcher\Socialstream\Events\ConnectedAccountCreated;
use JoelButcher\Socialstream\Events\ConnectedAccountDeleted;
use JoelButcher\Socialstream\Events\ConnectedAccountUpdated;

/**
 * App\Models\ConnectedAccount
 *
 * @property int $id
 * @property int $user_id
 * @property string $provider
 * @property string $provider_id
 * @property string|null $name
 * @property string|null $nickname
 * @property string|null $email
 * @property string|null $telephone
 * @property string|null $avatar_path
 * @property string $token
 * @property string|null $secret
 * @property string|null $refresh_token
 * @property string|null $expires_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereAvatarPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereUserId($value)
 *
 * @mixin \Eloquent
 */
class ConnectedAccount extends SocialstreamConnectedAccount
{
    use HasFactory;
    use HasTimestamps;

    /** {@inheritdoc} */
    protected $fillable = [
        'provider',
        'provider_id',
        'name',
        'nickname',
        'email',
        'avatar_path',
        'token',
        'refresh_token',
        'expires_at',
    ];

    /**
     * The event map for the model.
     *
     * @var array<string, class-string>
     */
    protected $dispatchesEvents = [
        'created' => ConnectedAccountCreated::class,
        'updated' => ConnectedAccountUpdated::class,
        'deleted' => ConnectedAccountDeleted::class,
    ];
}
