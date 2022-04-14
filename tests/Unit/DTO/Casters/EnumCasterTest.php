<?php

namespace Tests\Unit\DTO\Casters;

use App\DTO\Casters\EnumCaster;
use App\Enums\SocialEnum;
use PHPUnit\Framework\TestCase;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;

class EnumCasterTest extends TestCase
{
    public function test_can_be_casted()
    {
        $bar = new Bar([
            'social' => 'twitter',
        ]);

        $this->assertSame(SocialEnum::TWITTER, $bar->social);
    }

    public function test_enum_can_be_casted()
    {
        $bar = new Bar([
            'social' => SocialEnum::TWITTER,
        ]);

        $this->assertSame(SocialEnum::TWITTER, $bar->social);
    }
}

class Bar extends DataTransferObject
{
    #[CastWith(EnumCaster::class)]
    public SocialEnum $social;
}
