<?php

namespace App\Models;

use App\Enums\AuthorTypeEnum;
use App\Enums\PositionEnum;
use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $guarded = [];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'position' => PositionEnum::class,
            'author_type' => AuthorTypeEnum::class,
            'status' => StatusEnum::class,
        ];
    }
}
