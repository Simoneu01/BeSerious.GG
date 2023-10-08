<?php

namespace App\Http\Auth\Socialite;

use GuzzleHttp\Exception\GuzzleException;
use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;

class GameShardProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    protected function getAuthUrl($state): string
    {
        return $this->buildAuthUrlFromBase('https://gameshard.io/oauth/authorize', $state);
    }

    /**
     * {@inheritdoc}
     */
    protected function getTokenUrl(): string
    {
        return 'https://gameshard.io/oauth/token';
    }

    /**
     * {@inheritdoc}
     *
     * @throws GuzzleException
     */
    protected function getUserByToken($token): array
    {
        $userUrl = 'https://gameshard.io/api/user';

        $response = $this->getHttpClient()->get(
            $userUrl,
            $this->getRequestOptions($token)
        );

        return json_decode($response->getBody(), true);
    }

    /**
     * {@inheritdoc}
     */
    protected function mapUserToObject(array $user): User
    {
        // TODO: download avatar and then save it in local
        // $user['data']['avatar'] ?? null

        return (new User)->setRaw($user)->map([
            'id' => $user['data']['id'],
            'nickname' => $user['data']['username'],
            'name' => $user['data']['first_name'] . ' ' . $user['data']['last_name'],
            'email' => $user['data']['email'],
            'avatar' => null,
        ]);
    }

    /**
     * Get the default options for an HTTP request.
     */
    protected function getRequestOptions(string $token): array
    {
        return [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ];
    }
}
