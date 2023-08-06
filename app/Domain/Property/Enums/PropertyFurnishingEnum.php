<?php

namespace App\Domain\Property\Enums;

use App\Traits\BaseEnum;

enum PropertyFurnishingEnum: string
{
	use BaseEnum;

	case FURNISHED = 'furnished';
	case SEMI_FURNISHED = 'semi_furnished';
	case UNFURNISHED = 'unfurnished';

}
