<?php

namespace App\Http\Controllers;

use App\Enums\AuthorTypeEnum;
use App\Enums\PositionEnum;
use App\Models\Setting;
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

        $setting = Setting::firstOrFail();

        return view('register')
            ->with('countries', $countries)
            ->with('positions', $positions)
            ->with('authorTypes', $authorTypes)
            ->with('data', $setting->registration)
            ->with('earlybird_title', $setting->conference['important']['earlybird_deadline_title'])
            ->with('earlybird_date', \Carbon\Carbon::parse($setting->conference['important']['earlybird_deadline_date'])->toFormattedDateString())
            ->with('regular_title', $setting->conference['important']['regular_deadline_title'])
            ->with('regular_date', \Carbon\Carbon::parse($setting->conference['important']['regular_deadline_date'])->toFormattedDateString());
    }
}
