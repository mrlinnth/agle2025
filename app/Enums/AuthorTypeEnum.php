<?php

namespace App\Enums;

enum AuthorTypeEnum: string
{
    case FIRST_AUTHOR = 'First Author';
    case CORRESPONDING_AUTHOR = 'Corresponding Author';
    case OTHER_AUTHOR = 'Other Author';
}
