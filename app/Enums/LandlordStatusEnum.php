<?php
namespace App\Enums;

use App\Traits\BaseEnum;

enum LandlordStatusEnum: string
{
    use BaseEnum;

    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';
}
