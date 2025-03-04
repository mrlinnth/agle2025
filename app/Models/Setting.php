<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'countdown' => 'array',
            'contact' => 'array',
            'footer' => 'array',
            'home' => 'array',
            'conference' => 'array',
            'committees' => 'array',
            'organizers' => 'array',
            'abstract' => 'array',
            'registration' => 'array',
        ];
    }
}
