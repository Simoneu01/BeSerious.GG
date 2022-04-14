<?php

namespace App\DTO\Casters;

use Spatie\DataTransferObject\Caster;

class EnumCaster implements Caster
{
    private string $className;

    public function __construct(
        private array $types,
    ) {
        $this->className = $this->types[0];
    }

    public function cast(mixed $value): mixed
    {
        if ($value instanceof $this->className) {
            return $value;
        }

        return $this->className::from($value);
    }
}
