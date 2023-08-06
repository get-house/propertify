<?php

namespace App\Domain\Property\Enums;

use App\Traits\BaseEnum;

enum PropertyTypeEnum: string
{
	use BaseEnum;

	case APARTMENT = 'apartment';
	case VILLA = 'villa';
	case OFFICE = 'office';
	case SHOP = 'shop';
	case WAREHOUSE = 'warehouse';
	case LAND = 'land';
	case OTHER = 'other';

}
