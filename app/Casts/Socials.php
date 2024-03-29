<?php

namespace App\Casts;

use App\DTO\Social;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Contracts\Database\Eloquent\SerializesCastableAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use InvalidArgumentException;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class Socials implements CastsAttributes, SerializesCastableAttributes
{
    /**
     * Cast the given value.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return array<int, Social>
     *
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public function get($model, $key, $value, $attributes)
    {
        $socials = [];

        if (! is_null($value)) {
            foreach (json_decode($value, true) as $social) {
                $socials[] = new Social($social);
            }
        }

        return $socials;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  Collection<int, Social>|array<int, Social>  $value
     * @param  array  $attributes
     * @return false|string
     */
    public function set($model, $key, $value, $attributes)
    {
        foreach ($value as $social) {
            if (! $social instanceof Social) {
                try {
                    $social = new Social($social);
                } catch (UnknownProperties $e) {
                    throw new InvalidArgumentException('The given value is not a Social instance.');
                }
            }
        }

        return json_encode($value);
    }

    /**
     * Get the serialized representation of the value.
     *
     * @param  Model  $model
     * @param  mixed  $value
     */
    public function serialize($model, string $key, $value, array $attributes): mixed
    {
        return json_decode($attributes['socials'], true);
    }
}
