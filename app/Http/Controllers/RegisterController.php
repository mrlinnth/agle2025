<?php

namespace App\Http\Controllers;

use App\Enums\AuthorTypeEnum;
use App\Enums\PositionEnum;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $countries = countries();
        $positions = array_column(PositionEnum::cases(), 'value');
        $authorTypes = array_column(AuthorTypeEnum::cases(), 'value');

        return view('register', compact('countries', 'positions', 'authorTypes'));
    }
}
