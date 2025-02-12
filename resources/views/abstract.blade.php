<x-layout>
    <x-breadcrumb>
        Call for Abstract Submission
    </x-breadcrumb>

    <section class="py-20 bg-gray-1">
        <div class="container">
            <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
                <h2 class="mb-3 text-3xl font-bold sm:text-4xl md:text-[40px] md:leading-[1.2]">
                    Submit Your Paper
                </h2>
                <p class="text-base">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ab voluptatum,
                    provident voluptates vitae facilis possimus.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <h3 class="mb-2 font-bold">Theme and Topic</h3>
                        <p>The conference will partner with the “Journal of Rural Studies” and “Research
                            in Globalization” (Elsevier) for publication. Only Special Issue for the Global Perspectives
                            in rural development and innovation.
                        </p>
                    </div>
                    <div>
                        <h3 class="mb-2 font-bold">Length</h3>
                        <p>Maximum 250 words with 6 keywords</p>
                    </div>
                    <div>
                        <h3 class="mb-2 font-bold">Submission Deadline</h3>
                        <p>May 30, 2025</p>
                    </div>
                    <div>
                        <h3 class="mb-2 font-bold">Selection Announcement</h3>
                        <p>June 30, 2025</p>
                    </div>
                    <div>
                        <h3 class="mb-2 font-bold">Mode of Presentation</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, cumque?
                            Blanditiis est error, explicabo hic maiores mollitia rerum.</p>
                    </div>
                </div>
                <div class="rounded-lg bg-white p-8 shadow-lg">
                    <form method="POST" action="{{ route('submissions.store') }}" enctype="multipart/form-data"
                        class="space-y-4">
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
                            <label class="text-sm text-dark-3" for="paper_title">Title of Abstract*</label>
                            <input class="input-box" placeholder="Abstract Title" type="text" name="paper_title"
                                id="paper_title" required />
                        </div>
                        <div>
                            <label class="text-sm text-dark-3">Please upload the Abstract paper file. Max 2MB. Allow
                                file type: pdf*</label>
                            <input class="input-box" name="upload" id="upload" type="file" required />
                        </div>
                        <div>
                            <p class="text-sm text-dark-3">How will you present your paper?*</p>
                            <div>
                                <input type="checkbox" id="po_1" name="presentation_options[]"
                                    value="Poster Presentation" required />
                                <label for="po_1">Poster Presentation</label>
                            </div>
                            <div>
                                <input type="checkbox" id="po_2" name="presentation_options[]"
                                    value="Oral Presentation" required />
                                <label for="po_2">Oral Presentation</label>
                            </div>
                        </div>

                        <div class="mt-4">
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
