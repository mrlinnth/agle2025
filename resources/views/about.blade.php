@props([
    'pricings' => [
        'Researchers from Global South: USD 350',
        'Students from Global South: USD 170',
        'Students: USD 250',
        'Others: USD 400',
    ],
    'discounts' => [
        'Researchers from Global South: USD 250',
        'Students from Global South: USD 150',
        'Students: USD 200',
        'Others: USD 300',
    ],
])

<x-layout>
    <x-breadcrumb>
        Conference Details
    </x-breadcrumb>

    <section class="" id="details">
        <div class="container">
            <div class="my-10 flex flex-col">
                <h2 class="text-2xl font-extrabold leading-8">
                    Conference Dates
                </h2>
                <div class="mt-4 grid grid-cols-2 gap-4 w-full md:w-2/3">
                    <div class="bg-secondary-fade p-4 rounded-xl my-4 shadow-md w-full">
                        <h3 class="font-bold text-lg">Oral/Poster Presentation Sessions</h3>
                    </div>
                    <div class="relative flex items-center">
                        <div
                            class="absolute left-0 z-50 bg-gray-7 rounded-full w-20 h-20 flex justify-center items-center">
                            <svg class="w-14 h-14 text-gray-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="z-30 bg-secondary-fade p-4 rounded-full my-4 shadow-md w-full">
                            <h3 class="font-bold text-lg text-center">5-6 November 2025</h3>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 w-full md:w-2/3">
                    <div class="bg-primary-fade p-4 rounded-xl my-4 shadow-md w-full">
                        <h3 class="font-bold text-lg">Field Trip to Rural Thailand</h3>
                    </div>
                    <div class="relative flex items-center">
                        <div
                            class="absolute left-0 z-50 bg-gray-7 rounded-full w-20 h-20 flex justify-center items-center">
                            <svg class="w-14 h-14 text-gray-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="z-30 bg-primary-fade p-4 rounded-full my-4 shadow-md w-full">
                            <h3 class="font-bold text-lg text-center">7-8 November 2025</h3>
                        </div>
                    </div>
                </div>
                <div class="p-2 w-full md:w-2/3">
                    <ul class="list-disc ml-4">
                        <li>The field trip will be organized to provinces surrounding Bangkok, including Kanchanaburi,
                            Saraburi, and
                            Lopburi.</li>
                        <li>The tentative itinerary includes visits to <strong>the Self-Sufficient Economy Agricultural
                                Model,
                                Organic PGS
                                farming, Pasak Cholasid Dam and Wetland Management, community-based irrigation groups,
                                and
                                EcoSmart Farm
                                Systems, Circular Farm Models.</strong></li>
                </div>
                <div class="grid grid-cols-2 gap-4 w-full md:w-2/3">
                    <div class="bg-gray-2 p-4 rounded-xl my-4 shadow-md w-full">
                        <h3 class="font-bold text-lg">Gala dinner Chao Phraya Cruise</h3>
                    </div>
                    <div class="relative flex items-center">
                        <div
                            class="absolute left-0 z-50 bg-gray-7 rounded-full w-20 h-20 flex justify-center items-center">
                            <svg class="w-14 h-14 text-gray-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="z-30 bg-gray-2 p-4 rounded-full my-4 shadow-md w-full">
                            <h3 class="font-bold text-lg text-center">5 November 2025</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-10 flex flex-col gap-8">
                <h2 class="text-2xl font-extrabold leading-8">
                    Important Dates
                </h2>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex gap-8 items-center">
                        <div class="w-16 h-16 p-2 text-center rounded-lg bg-primary-fade">
                            <p class="font-semibold"><strong class="text-2xl">30</strong> May</p>
                        </div>
                        <div>
                            <p class="font-bold">Abstract Submission Deadline</p>
                            <p class="">May 30, 2025 (Friday)</p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="w-16 h-16 p-2 text-center rounded-lg bg-primary-fade">
                            <p class="font-semibold"><strong class="text-2xl">30</strong> June</p>
                        </div>
                        <div>
                            <p class="font-bold">Abstract Acceptance Announcement</p>
                            <p class="">June 30, 2025 (Monday)</p>
                        </div>
                    </div>
                    <div class="mt-8 flex gap-8 items-center">
                        <div class="w-16 h-16 p-2 text-center rounded-lg bg-warning">
                            <p class="font-semibold"><strong class="text-2xl">30</strong> June</p>
                        </div>
                        <div>
                            <p class="font-bold">Early Bird Registration Deadline</p>
                            <p class="">June 30, 2025 (Monday)</p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="w-16 h-16 p-2 text-center rounded-lg bg-warning">
                            <p class="font-semibold"><strong class="text-2xl">07</strong> Sep</p>
                        </div>
                        <div>
                            <p class="font-bold">Regular Registration Deadline</p>
                            <p class="">September 07, 2025 (Sunday)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-10 flex flex-col gap-8">
                <h2 class="text-2xl font-extrabold leading-8">
                    Conference Fee
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full md:w-2/3">
                    <div class="flex flex-col gap-4">
                        <div class="bg-yellow-300 p-2 rounded-xl w-full h-20 flex flex-col items-center justify-center">
                            <h3 class="font-bold text-lg">Participants Type</h3>
                        </div>
                        <div class="bg-yellow-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">Researchers from Global South</h3>
                        </div>
                        <div class="bg-yellow-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">Students from Global South</h3>
                        </div>
                        <div class="bg-yellow-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">Students</h3>
                        </div>
                        <div class="bg-yellow-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">Others</h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-teal-300 p-2 rounded-xl w-full h-20 flex flex-col items-center justify-center">
                            <h3 class="font-bold text-lg">Early Bird</h3>
                            <p class="">(Until June 30, 2025)</p>
                        </div>
                        <div class="bg-teal-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">USD 250</h3>
                        </div>
                        <div class="bg-teal-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">USD 150</h3>
                        </div>
                        <div class="bg-teal-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">USD 200</h3>
                        </div>
                        <div class="bg-teal-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">USD 300</h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-blue-300 p-2 rounded-xl w-full h-20 flex flex-col items-center justify-center">
                            <h3 class="font-bold text-lg">Regular</h3>
                        </div>
                        <div class="bg-blue-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">USD 350</h3>
                        </div>
                        <div class="bg-blue-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">USD 170</h3>
                        </div>
                        <div class="bg-blue-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">USD 250</h3>
                        </div>
                        <div class="bg-blue-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">USD 400</h3>
                        </div>
                    </div>

                    <div class="bg-gray-2 p-4 rounded-xl md:col-span-3 flex flex-col">
                        <h3 class="font-bold text-lg">Optional</h3>
                        <ul class="list-disc ml-4">
                            <li>Two-Day Field Trip - USD 100 (including food and transportation)</li>
                            <li>Gala Dinner - USD 55 (includng transportation)</li>
                        </ul>
                    </div>
                </div>
                <p class="text-primary font-bold">*** The best abstracts submitted by early-stage researchers from the
                    Global
                    South will be selected for an award of registration fee waiver ***</p>
            </div>
        </div>
    </section>

</x-layout>
