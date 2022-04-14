<?php

namespace Tests\Unit\Enums;

use App\Enums\SocialEnum;
use PHPUnit\Framework\TestCase;

class SocialEnumTest extends TestCase
{
    public function test_get_label()
    {
        $social = SocialEnum::from('twitter');

        $this->assertSame('Twitter', $social->getLabel());
    }

    public function test_get_icon()
    {
        $twitter = SocialEnum::from('twitter');
        $this->assertSame('fab-twitter', $twitter->getIcon());

        $twitter = SocialEnum::from('linkedin');
        $this->assertSame('fab-linkedin', $twitter->getIcon());

        $twitter = SocialEnum::from('instagram');
        $this->assertSame('fab-instagram', $twitter->getIcon());

        $twitter = SocialEnum::from('facebook');
        $this->assertSame('fab-facebook', $twitter->getIcon());

        $twitter = SocialEnum::from('twitch');
        $this->assertSame('fab-twitch', $twitter->getIcon());
    }
}
