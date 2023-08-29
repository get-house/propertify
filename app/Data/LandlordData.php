<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class LandlordData extends Data
{
    public function __construct(
        public int $id,
        public string $status,
        public bool $is_paused,
        public string $created_at,
        public string $updated_at,
    ) {
    }
}
