<?php

namespace App\Http\Controllers;

use App\Enums\PositionEnum;
use Illuminate\Http\Request;

class AbstractController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $countries = countries();
        $positions = array_column(PositionEnum::cases(), 'value');

        return view('abstract', compact('countries', 'positions'));
    }
}
