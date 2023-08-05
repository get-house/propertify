<?php
namespace App\Enums;

use App\Traits\BaseEnum;

enum TenantStatusEnum: string
{
    use BaseEnum;

    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';
}
