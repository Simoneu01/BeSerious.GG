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

    public function test_get_classes()
    {
        $twitter = SocialEnum::from('twitter');
        $this->assertSame('hover:text-[#00acee]', $twitter->getClasses());

        $twitter = SocialEnum::from('linkedin');
        $this->assertSame('hover:text-[#0e76a8]', $twitter->getClasses());

        $twitter = SocialEnum::from('instagram');
        $this->assertSame('hover:text-orange-500', $twitter->getClasses());

        $twitter = SocialEnum::from('facebook');
        $this->assertSame('hover:text-[#1778F2]', $twitter->getClasses());

        $twitter = SocialEnum::from('twitch');
        $this->assertSame('hover:text-[#9147ff]', $twitter->getClasses());
    }
}
