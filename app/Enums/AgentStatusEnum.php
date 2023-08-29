<?php
namespace App\Enums;

use App\Traits\BaseEnum;

enum AgentStatusEnum: string
{
    use BaseEnum;

    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';
}
