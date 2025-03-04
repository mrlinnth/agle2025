<?php

namespace App\Models;

use App\Enums\PositionEnum;
use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
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
            'presentation_options' => 'array',
            'status' => StatusEnum::class,
        ];
    }
}
