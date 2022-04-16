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

    public function getClasses(): string
    {
        return match ($this) {
            SocialEnum::TWITTER => 'hover:text-[#00acee]',
            SocialEnum::LINKEDIN => 'hover:text-[#0e76a8]',
            SocialEnum::INSTAGRAM => 'hover:text-orange-500',
            SocialEnum::FACEBOOK => 'hover:text-[#1778F2]',
            SocialEnum::TWITCH => 'hover:text-[#9147ff]',
            default => 'hover:text-gray-500'
        };
    }

    public function getLabel(): string
    {
        return ucfirst($this->value);
    }
}
