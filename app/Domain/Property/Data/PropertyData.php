<?php

namespace App\Domain\Property\Data;


use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class PropertyData extends Data
{


    public function __construct(
        public int $id,
        public string $name,
        public string $price,
        public string $description,
        public string $address,
        public string $city,
        public string $state,
        public string $size,
        public int $user_id,

    ) {}
}
