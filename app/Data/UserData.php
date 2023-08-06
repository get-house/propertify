<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class UserData extends Data
{
    public function __construct(
      public int $id,
        public string $first_name,
        public string $last_name,
        public string $username,
        public string $email,
        public string $address,
        public string $phone,
        public string $zone,
        public string $city,
        public string $state,
		public string $role,
		public string $status,
		public string $created_at,
		public string $updated_at,

    ) {}
}
