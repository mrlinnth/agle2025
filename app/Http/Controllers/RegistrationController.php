<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Models\Registration;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    /**
     * Show the specified resource.
     */
    public function show(string $reference)
    {
        $registration = Registration::where('reference', $reference)->firstOrFail();
        $file = Storage::temporaryUrl(
            $registration->payment,
            now()->addMinutes(3)
        );
        return view('registration', compact('registration', 'file'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistrationRequest $request)
    {
        $path = $request->upload->store('payments');
        $data = array_merge($request->safe()->except(['upload']), ['payment' => $path, 'reference' => uniqid()]);
        $registration = Registration::create($data);

        return redirect()->route('registrations.show', ['reference' => $registration->reference]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        //
    }
}
