<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubmissionRequest;
use App\Http\Requests\UpdateSubmissionRequest;
use App\Models\Submission;

class SubmissionController extends Controller
{
    /**
     * Show the specified resource.
     */
    public function show(Submission $submission)
    {
        dd($submission);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubmissionRequest $request)
    {
        $submission = Submission::create($request->validated());

        return redirect()->route('submissions.show', ['submission' => $submission]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubmissionRequest $request, Submission $submission)
    {
        //
    }
}
