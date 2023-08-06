<?php

namespace App\Domain\Property\Data;


use Spatie\LaravelData\Attributes\Validation\Rule;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class PropertyData extends Data
{


    public function __construct(
        public int $id,
		#[Rule(['required', 'string', 'max:150'])]
        public string $name,
		#[Rule(['required', 'string', 'max:255'])]
        public string $price,
        public string $description,
        public string $address,
        public string $city,
        public string $state,
        public string $size,
        public int $landlord_id,

    ) {}


}
