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
                        <div>
                            <label class="sr-only" for="name">Name</label>
                            <input class="input-box" placeholder="Name" type="text" name="name" id="name" />
                        </div>
                        <div>
                            <label class="sr-only" for="institution">Institution</label>
                            <input class="input-box" placeholder="Institution" type="text" name="institution"
                                id="institution" />
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="sr-only" for="country">Country</label>
                                <input class="input-box" placeholder="Country" type="text" name="country"
                                    id="country" />
                            </div>

                            <div>
                                <label class="sr-only" for="phone">Contact</label>
                                <input class="input-box" placeholder="Contact Number" type="text" name="phone"
                                    id="phone" />
                            </div>
                        </div>

                        <div>
                            <label class="sr-only" for="abstract">Abstract</label>

                            <textarea class="input-box" placeholder="Paper Abstract" rows="8" name="abstract" id="abstract"></textarea>
                        </div>

                        <div>
                            <label class="sr-only" for="title">Paper Title</label>
                            <input class="input-box" placeholder="Paper Title" type="text" name="title"
                                id="title" />
                        </div>
                        <div>
                            <label class="sr-only" for="keywords">Keywords</label>
                            <input class="input-box" placeholder="Keywords" type="text" name="keywords"
                                id="keywords" />
                        </div>

                        <div>
                            <h2 class="font-bold">Upload Paper</h2>
                            <p class="mb-2 text-sm font-light">Max 2MB. Allow file type: pdf.</p>
                            <input class="input-box" name="upload" id="upload" type="file" required />
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
