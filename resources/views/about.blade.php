<x-layout>
    <x-breadcrumb>
        Conference Details
    </x-breadcrumb>

    <section class="py-20 bg-gray-1" id="details">
        <div class="container">
            <div class="flex flex-col gap-8" id="dates">
                <h3 class="text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                    Conference Dates
                </h3>
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
            <div class="flex flex-col gap-8 mt-10" id="dates">
                <h3 class="text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                    Important Dates
                </h3>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex gap-8 items-center">
                        <div class="w-12 h-14 text-center border rounded-lg border-primary-light bg-primary-fade">
                            <p class="font-extrabold">30 May</p>
                        </div>
                        <div>
                            <p class="font-bold">Abstract Submission Deadline</p>
                            <p class="">May 30, 2025 (Friday)</p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="w-12 h-14 text-center border rounded-lg border-primary-light bg-primary-fade">
                            <p class="font-extrabold">30 June</p>
                        </div>
                        <div>
                            <p class="font-bold">Abstract Acceptance Announcement</p>
                            <p class="">June 30, 2025 (Monday)</p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="w-12 h-14 text-center border rounded-lg border-secondary bg-warning">
                            <p class="font-extrabold">07 Sep</p>
                        </div>
                        <div>
                            <p class="font-bold">Registration Deadline</p>
                            <p class="">September 07, 2025 (Sunday)</p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="w-12 h-14 text-center border rounded-lg border-secondary bg-warning">
                            <p class="font-extrabold">30 June</p>
                        </div>
                        <div>
                            <p class="font-bold">Early Bird Registration Deadline</p>
                            <p class="">June 30, 2025 (Monday)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-pricing />

    <section class="py-10 bg-gray-1" id="">
        <div class="container">
            <x-location />
        </div>
    </section>

    <section class="pb-10 bg-gray-1" id="accomodation">
        <div class="container">
            <h3 class="text-2xl mb-2 font-extrabold leading-8">
                Information on Accommodation and Transportation
            </h3>
            <h3 class="text-xl font-extrabold leading-8">
                Accomodation
            </h3>
            <p>Participants are recommended to consider the following accommodations options where are easily
                accessible
                to Conference Location.</p>
            <div class="mt-2 grid grid-cols-1 gap-4">
                <div class="flex flex-col gap-2">
                    <p class="text-primary">1. AIT Conference Center</p>
                    <p>Hotel and Dining Facility in AIT Campus [visit - <a href="http://aitcc.ait.ac.th/accommodation/"
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
                    <p>Around 12 km to AIT [visit - <a href="https://novotelbangkokfutureparkrangsit.com/rooms-suites/"
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
    </section>

</x-layout>
