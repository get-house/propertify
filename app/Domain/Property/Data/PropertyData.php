<?php

namespace App\Domain\Property\Data;

use App\Domain\Property\Enums\PropertyConditionEnum;
use App\Domain\Property\Enums\PropertyFurnishingEnum;
use App\Domain\Property\Enums\PropertyStatusEnum;
use App\Domain\Property\Enums\PropertyTypeEnum;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Attributes\Validation\Rule;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class PropertyData extends Data
{
    public function __construct(
        public int $id,
        #[Rule(['string', 'max:150'])]
        public string $name,
        #[Rule(['string', 'max:255'])]
        public string $price,
        public string $description,
        #[Rule(new Enum(PropertyConditionEnum::class))]
        public ?PropertyConditionEnum $condition,
        #[Rule(new Enum(PropertyStatusEnum::class))]
        public ?PropertyStatusEnum $status,
        #[Rule(new Enum(PropertyTypeEnum::class))]
        public ?PropertyTypeEnum $type,
        #[Rule(new Enum(PropertyFurnishingEnum::class))]
        public ?PropertyFurnishingEnum $furnishing,
        #[Rule(['integer', 'max:10'])]
        public ?int $bedrooms,
        #[Rule(['integer', 'max:10'])]
        public ?int $bathrooms,
        #[Rule(['integer', 'max:10'])]
        public ?int $parking,
        #[Rule(['string', 'max:255'])]
        public ?string $size,
        #[Rule(['string', 'max:255'])]
        public ?string $address,
        #[Rule(['string', 'max:255'])]
        public ?string $city,
        #[Rule(['string', 'max:255'])]
        public ?string $state,
        public ?bool $verified,
        public ?bool $featured,
        //return landlord associated with property
        //        public int $landlord_id,
        public ?string $published_at,
        public ?string $expired_at,
        public ?string $sold_at,
        public ?string $archived_at,
        public ?string $verified_at,
        public ?string $featured_at,
        public ?string $deleted_at,
        // date of property creation, default is current date
        public ?string $created_at,
        // date of property update, default is current date
        public ?string $updated_at,
    ) {
    }
}
