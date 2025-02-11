<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Models\Registration;

class RegistrationController extends Controller
{
    /**
     * Show the specified resource.
     */
    public function show(Registration $registration)
    {
        dd($registration);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistrationRequest $request)
    {
        // dd($request->all());

        $path = $request->upload->store('payments');

        $registration = Registration::create($request->validated());
        $registration->update(['payment' => $path]);

        return redirect()->route('registrations.show', ['registration' => $registration]);
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
