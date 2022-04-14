<?php

namespace App\Enums;

enum SocialEnum: string
{
    case TWITTER = 'twitter';
    case LINKEDIN = 'linkedin';
    case INSTAGRAM = 'instagram';
    case FACEBOOK = 'facebook';
    case TWITCH = 'twitch';

    public function getIcon(): string
    {
        return match ($this) {
            SocialEnum::TWITTER => 'fab-twitter',
            SocialEnum::LINKEDIN => 'fab-linkedin',
            SocialEnum::INSTAGRAM => 'fab-instagram',
            SocialEnum::FACEBOOK => 'fab-facebook',
            SocialEnum::TWITCH => 'fab-twitch',
            default => 'fas-hashtag'
        };
    }

    public function getLabel(): string
    {
        return ucfirst($this->value);
    }
}
