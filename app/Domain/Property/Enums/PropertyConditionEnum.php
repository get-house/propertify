<?php

namespace App\Domain\Property\Enums;

use App\Traits\BaseEnum;

enum PropertyConditionEnum: string
{
	use BaseEnum;

	case NEW = 'new';
	case OLD = 'old';
	case RENOVATED = 'renovated';

}
