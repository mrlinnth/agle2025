<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $setting = Setting::firstOrFail();

        return view('committee')
            ->with('committees', $setting->committees)
            ->with('organizers', $setting->organizers);
    }
}
