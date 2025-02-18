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
            <div class="my-10 flex flex-col gap-8">
                <h2 class="text-2xl font-extrabold leading-8">
                    Conference Dates
                </h2>
                <table>
                    <tr>
                        <td>Oral/Poster Presentation sessions:</td>
                        <td>5-6 November 2025</td>
                    </tr>
                    <tr>
                        <td>Fieldtrip:</td>
                        <td>7-8 November 2025. The field trips will be organized to
                            visit xxxxxxxxxx in the Saraburi, Lopburi and Kanchanaburi Provinces.</td>
                    </tr>
                    <tr>
                        <td>Gala dinner Chao Phraya Cruise:</td>
                        <td>5 November 2025</td>
                    </tr>
                </table>
            </div>
            <div class="my-10 flex flex-col gap-8">
                <h2 class="text-2xl font-extrabold leading-8">
                    Important Dates
                </h2>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex gap-8 items-center">
                        <div class="w-12 h-14 text-center border rounded-lg border-primary-light bg-primary-fade">
                            <p class="font-semibold"><strong class="text-2xl">30</strong> May</p>
                        </div>
                        <div>
                            <p class="font-bold">Abstract Submission Deadline</p>
                            <p class="">May 30, 2025 (Friday)</p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="w-12 h-14 text-center border rounded-lg border-primary-light bg-primary-fade">
                            <p class="font-semibold"><strong class="text-2xl">30</strong> June</p>
                        </div>
                        <div>
                            <p class="font-bold">Abstract Acceptance Announcement</p>
                            <p class="">June 30, 2025 (Monday)</p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="w-12 h-14 text-center border rounded-lg border-secondary bg-warning">
                            <p class="font-semibold"><strong class="text-2xl">07</strong> Sep</p>
                        </div>
                        <div>
                            <p class="font-bold">Registration Deadline</p>
                            <p class="">September 07, 2025 (Sunday)</p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="w-12 h-14 text-center border rounded-lg border-secondary bg-warning">
                            <p class="font-semibold"><strong class="text-2xl">30</strong> June</p>
                        </div>
                        <div>
                            <p class="font-bold">Early Bird Registration Deadline</p>
                            <p class="">June 30, 2025 (Monday)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex flex-col gap-8">
                <h2 class="text-2xl font-extrabold leading-8">
                    Conference Fee
                </h2>
                <div class="grid place-items-center">
                    <div class="m-auto flex w-full flex-col items-center gap-4 text-center">
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="w-full bg-gray-2 shadow-sm">
                                <div><br></div>
                                <div class="flex flex-col space-y-1.5 p-6">
                                    <h3 class="text-2xl font-semibold leading-none tracking-tight">Regular</h3>
                                </div>
                                <div class="p-6 pt-0">
                                    <ul class="list-inside list-disc">
                                        @foreach ($pricings as $text)
                                            <li class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="inline-block text-primary-light">
                                                    <path
                                                        d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                                                    <path d="m9 12 2 2 4-4" />
                                                </svg>
                                                <span class="flex-1 text-left">{{ $text }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="w-full bg-warning shadow-sm">
                                <div class="flex flex-col space-y-1.5 p-6">
                                    <div
                                        class="focus:ring-ring text-foreground m-auto inline-flex w-fit items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2">
                                        Until June 30, 2025
                                    </div>
                                    <h3 class="text-2xl font-semibold leading-none tracking-tight">
                                        Early Bird Discount
                                    </h3>
                                </div>
                                <div class="p-6 pt-0">
                                    <ul class="list-inside list-disc">
                                        @foreach ($discounts as $text)
                                            <li class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="inline-block text-primary-light">
                                                    <path
                                                        d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                                                    <path d="m9 12 2 2 4-4" />
                                                </svg>
                                                <span class="flex-1 text-left">{{ $text }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-secondary bg-secondary py-8">
            <p class="font-bold text-white text-center">The best abstracts submitted by early-stage
                researchers
                from
                the Global South will be selected for an award of registration fee
                waiver.</p>
        </div>
        <div class="container">
            <div class="flex justify-center">
                <div class="border border-primary-fade bg-primary-fade p-10 w-[748px]">
                    <h3 class="mb-4 text-2xl font-semibold leading-none tracking-tight">
                        Field Trip Fee (Optional)
                    </h3>
                    <ul class="list-disc text-left">
                        <li>Two Days Field Trip: USD 100 (including food and transportation)</li>
                        <li>Gala Dinner: USD 55 (including transportation)</li>
                    </ul>
                </div>
            </div>
            <div class="my-10 flex flex-col gap-8">
                <x-location />
            </div>
            <div class="my-10 flex flex-col">
                <h2 class="mb-2 text-2xl font-extrabold leading-8">
                    Information on Accommodation and Transportation
                </h2>
                <h3 class="text-xl font-extrabold leading-8">
                    Accomodation
                </h3>
                <p>Participants are recommended to consider the following accommodations options where are easily
                    accessible
                    to Conference Location.</p>
                <div class="mt-2 grid grid-cols-1 gap-4">
                    <div class="flex flex-col gap-2">
                        <p class="text-primary">1. AIT Conference Center</p>
                        <p>Hotel and Dining Facility in AIT Campus [visit - <a
                                href="http://aitcc.ait.ac.th/accommodation/"
                                class="text-sm">http://aitcc.ait.ac.th/accommodation/</a>]</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-primary">2. Pinehurst Golf Club and Hotel</p>
                        <p>Around 6 km to AIT [visit - <a href="https://www.pinehurst.co.th/en/hotel"
                                class="text-sm">https://www.pinehurst.co.th/en/hotel</a>]
                        </p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-primary">3. Novotel Bangkok Future Park Rangsit</p>
                        <p>Around 12 km to AIT [visit - <a
                                href="https://novotelbangkokfutureparkrangsit.com/rooms-suites/"
                                class="text-sm">https://novotelbangkokfutureparkrangsit.com/rooms-suites/</a>]</p>
                    </div>
                </div>
                <h3 class="mt-4 text-xl font-extrabold leading-8">
                    Airport Transportation
                </h3>
                <div class="mt-2 grid grid-cols-1 gap-4">
                    <div class="flex flex-col gap-2">
                        <p class="text-primary">1. Suvarnabhumi International Airport to AIT (around 60 km)</p>
                        <p>Around 1 hr with city taxi (around USD25)</p>
                        <p>No direct bus to campus</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-primary">2. Don Mueang International Airport to AIT (around 60 km)</p>
                        <p>Around 25 mins with city taxi (around USD15)</p>
                        <p>Around 2 hrs with public transportation (Bus no - 510)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
