<?php

namespace App\DTO;

use App\DTO\Casters\EnumCaster;
use App\Enums\SocialEnum;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;

class Social extends DataTransferObject
{
    #[CastWith(EnumCaster::class)]
    public SocialEnum $type;
    public string $url;
}
