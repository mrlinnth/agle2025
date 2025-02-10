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
                        <p class="lg:mb-9">The conference will partner with the “Journal of Rural Studies” and “Research
                            in Globalization” (Elsevier) for publication. Only Special Issue for the Global Perspectives
                            in rural development and innovation.
                        </p>
                    </div>
                    <div>
                        <h3 class="mb-2 font-bold">Length</h3>
                        <p class="lg:mb-9">Maximum 250 words with 6 keywords</p>
                    </div>
                    <div>
                        <h3 class="mb-2 font-bold">Submission Deadline</h3>
                        <p class="lg:mb-9">May 30, 2025</p>
                    </div>
                    <div>
                        <h3 class="mb-2 font-bold">Selection Announcement</h3>
                        <p class="lg:mb-9">June 30, 2025</p>
                    </div>
                    <div>
                        <h3 class="mb-2 font-bold">Mode of Presentation</h3>
                        <p class="lg:mb-9">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, cumque?
                            Blanditiis est error, explicabo hic maiores mollitia rerum.</p>
                    </div>
                </div>
                <div class="rounded-lg bg-white p-8 shadow-lg">
                    <form action="#" class="space-y-4">
                        <div>
                            <label class="sr-only" for="name">Name</label>
                            <input class="input-box" placeholder="Name" type="text" id="name" />
                        </div>
                        <div>
                            <label class="sr-only" for="institution">Institution</label>
                            <input class="input-box" placeholder="Institution" type="text" id="institution" />
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="sr-only" for="country">Country</label>
                                <input class="input-box" placeholder="Country" type="text" id="country" />
                            </div>

                            <div>
                                <label class="sr-only" for="phone">Contact</label>
                                <input class="input-box" placeholder="Contact Number" type="tel" id="phone" />
                            </div>
                        </div>

                        <div>
                            <label class="sr-only" for="message">Abstract</label>

                            <textarea class="input-box" placeholder="Paper Abstract" rows="8" id="message"></textarea>
                        </div>

                        <div>
                            <label class="sr-only" for="title">Paper Title</label>
                            <input class="input-box" placeholder="Paper Title" type="text" id="title" />
                        </div>
                        <div>
                            <label class="sr-only" for="keywords">Keywords</label>
                            <input class="input-box" placeholder="Keywords" type="text" id="keywords" />
                        </div>

                        <div>
                            <label
                                class="flex cursor-pointer appearance-none justify-center rounded-md border border-dashed border-gray-300 bg-white px-3 py-6 text-sm transition hover:border-gray-400 focus:border-solid focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600 disabled:cursor-not-allowed disabled:bg-gray-200 disabled:opacity-75"
                                tabindex="0">
                                <span class="flex items-center space-x-2">
                                    <svg class="h-6 w-6 stroke-gray-400" viewBox="0 0 256 256">
                                        <path d="M96,208H72A56,56,0,0,1,72,96a57.5,57.5,0,0,1,13.9,1.7" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path>
                                        <path d="M80,128a80,80,0,1,1,144,48" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="24"></path>
                                        <polyline points="118.1 161.9 152 128 185.9 161.9" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></polyline>
                                        <line x1="152" y1="208" x2="152" y2="128" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line>
                                    </svg>
                                    <span class="text-xs font-medium text-gray-600">
                                        Drop files to Attach, or
                                        <span class="text-blue-600 underline">browse</span>
                                    </span>
                                </span>
                                <input id="photo-dropbox" type="file" class="sr-only" />
                            </label>
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
