<x-layout>
    <x-breadcrumb>
        Call for Abstract Submission
    </x-breadcrumb>

    @if ($errors->any())
        <div role="alert" class="rounded-sm border-s-4 border-red-500 bg-red-50 p-4">
            <strong class="block font-medium text-red-800">Form submission error</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="py-20 bg-gray-1">
        <div class="container">

            <div class="flex flex-col md:flex-row gap-4">
                <div class="basis-1 md:basis-1/3">
                    <p>
                        Each abstract should be no longer than <strong>250 words</strong> and must include <strong>6
                            keywords</strong>. The conference
                        will partner with Journal of Rural Studies, Elsevier and Research in Globalization,
                        Elsevier to publish special issues featuring selected conference papers. The best abstracts will
                        be invited to submit full
                        papers for consideration in these special issues.
                    </p>
                    <h3 class="mt-4 font-bold">Submission Deadline</h3>
                    <p>May 30, 2025</p>
                </div>
                <div class="basis-1 md:basis-2/3">
                    <form method="POST" action="{{ route('submissions.store') }}" enctype="multipart/form-data"
                        class="rounded-lg bg-white p-8 shadow-lg space-y-4">
                        @csrf
                        <h2 class="mb-2 font-bold">Abstract Submission</h2>
                        <div>
                            <label class="text-sm text-dark-3" for="name">Full Name*</label>
                            <input class="input-box" placeholder="Name" type="text" name="name" id="name"
                                required />
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="email">Email*</label>
                            <input class="input-box" placeholder="Email" type="email" name="email" id="email"
                                required />
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="position">Position*</label>
                            <select class="input-box" name="position" id="position">
                                @foreach ($positions as $position)
                                    <option value="{{ $position }}">{{ $position }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="institution">Institution*</label>
                            <input class="input-box" placeholder="Institution" type="text" name="institution"
                                id="institution" required />
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="country">Country*</label>
                            <select class="input-box" name="country" id="country">
                                @foreach ($countries as $country)
                                    <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="first_author">Name of First author and
                                affiliation*</label>
                            <input class="input-box" placeholder="First author" type="text" name="first_author"
                                id="first_author" required />
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="corresponding_author">Name of Corresponding author
                                and affiliation</label>
                            <input class="input-box" placeholder="Corresponding author" type="text"
                                name="corresponding_author" id="corresponding_author" />
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="other_author">Name of other authors and their
                                affiliation</label>
                            <input class="input-box" placeholder="Other author" type="text" name="other_author"
                                id="other_author" />
                        </div>
                        <div>
                            <p class="text-sm text-dark-3">Which option you would like to choose to present your paper?*
                            </p>
                            <div>
                                <input type="radio" id="po_1" name="presentation_options[]"
                                    value="Poster Presentation" required />
                                <label for="po_1">Poster Presentation</label>
                            </div>
                            <div>
                                <input type="radio" id="po_2" name="presentation_options[]"
                                    value="Oral Presentation" required />
                                <label for="po_2">Oral Presentation</label>
                            </div>
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="paper_title">Title of Abstract*</label>
                            <input class="input-box" placeholder="Abstract Title" type="text" name="paper_title"
                                id="paper_title" required />
                        </div>
                        <div>
                            <label class="text-sm text-dark-3">Please upload the Abstract paper file. Max 2MB. Allow
                                file type: pdf*</label>
                            <input class="input-box" name="upload" id="upload" type="file" required />
                        </div>

                        <div class="mt-4">
                            {!! RecaptchaV3::field('submit') !!}
                            <button type="submit" class="btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
