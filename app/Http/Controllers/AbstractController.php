<?php

namespace App\Http\Controllers;

use App\Enums\PositionEnum;
use App\Models\Setting;
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
        $setting = Setting::firstOrFail();

        return view('abstract')
            ->with('countries', $countries)
            ->with('positions', $positions)
            ->with('data', $setting->abstract)
            ->with('deadline', \Carbon\Carbon::parse($setting->conference['important']['abstract_deadline_date'])->toFormattedDateString());
    }
}
