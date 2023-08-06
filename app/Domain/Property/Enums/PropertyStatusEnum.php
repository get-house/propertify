<?php

namespace App\Domain\Property\Enums;

use App\Traits\BaseEnum;

enum PropertyStatusEnum: string
{
	use BaseEnum;

	case AVAILABLE = 'available';
	case RENTED = 'rented';
	case PAUSED = 'paused';

}
