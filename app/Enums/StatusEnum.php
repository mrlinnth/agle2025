<?php

namespace App\Enums;

enum StatusEnum: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case CONFIRMED = 'confirmed';
    case REJECTED = 'rejected';
    case CANCELED = 'canceled';
}
