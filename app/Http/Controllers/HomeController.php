<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $clients = [
            [
                'ref' => '#',
                'image' => '/assets/logo/ait-logo.jpg',
                'whiteImage' => '/assets/logo/ait-logo.jpg',
                'name' => 'AIT',
            ],
            [
                'ref' => '#',
                'image' => '/assets/logo/adilade-logo.png',
                'whiteImage' => '/assets/logo/adilade-logo.png',
                'name' => 'Adilade',
            ],
            [
                'ref' => '#',
                'image' => '/assets/logo/chinese-logo.jpeg',
                'whiteImage' => '/assets/logo/chinese-logo.jpeg',
                'name' => 'Chinese',
            ],
        ];

        return view('home', compact('clients'));
    }
}
