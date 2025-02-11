<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubmissionRequest;
use App\Http\Requests\UpdateSubmissionRequest;
use App\Models\Submission;
use Illuminate\Support\Facades\Storage;

class SubmissionController extends Controller
{
    /**
     * Show the specified resource.
     */
    public function show(string $reference)
    {
        $submission = Submission::where('reference', $reference)->firstOrFail();
        $file = Storage::temporaryUrl(
            $submission->file,
            now()->addMinutes(3)
        );
        return view('submission', compact('submission', 'file'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubmissionRequest $request)
    {
        $path = $request->upload->store('papers');
        $data = array_merge($validated = $request->safe()->except(['upload']), ['file' => $path, 'reference' => uniqid()]);
        $submission = Submission::create($data);

        return redirect()->route('submissions.show', ['reference' => $submission->reference]);
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
