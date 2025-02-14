<x-layout>
    <x-breadcrumb>
        About
    </x-breadcrumb>

    <section class="py-20 bg-gray-1" id="details">
        <div class="container">
            <x-details />
            <x-agenda />
            <div class="flex flex-col gap-8">
                <h3 class="text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                    Important Dates
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="flex flex-col gap-2 text-center">
                        <p class="font-bold">Registration Deadline</p>
                        <p class="text-primary">September 7, 2025 (Sunday)</p>
                        <br>
                        <p class="font-bold">Early Bird Registration Deadline</p>
                        <p class="text-primary">June 30, 2025 (Monday)</p>
                    </div>
                    <div class="flex flex-col gap-2 text-center">
                        <p class="font-bold">Abstract Submission Deadline</p>
                        <p class="text-primary">May 30, 2025 (Friday)</p>
                        <br>
                        <p class="font-bold">Abstract Acceptance Announcement</p>
                        <p class="text-primary">June 30, 2025 (Monday)</p>
                    </div>
                    <div class="flex flex-col gap-2 text-center">
                        <p class="font-bold">Conference Presentation Sessions</p>
                        <p class="text-primary">5-6 November 2025</p>
                        <br>
                        <p class="font-bold">Field Trip</p>
                        <p class="text-primary">7-8 November 2025</p>
                    </div>
                </div>
            </div>
            <x-theme />
            <x-location />
        </div>
    </section>

    <x-countdown />

    <x-pricing />

    <section class="py-20 bg-gray-1" id="accomodation">
        <div class="container">
            <div class="flex flex-col gap-8">
                <h3 class="text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                    Accomodation
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="flex flex-col gap-2">
                        <p class="font-bold">Option 1</p>
                        <p class="text-primary">AIT Conference Center</p>
                        <p>Hotel and Dining Facility in AIT Campus <a href="http://aitcc.ait.ac.th/accommodation/"
                                class="text-sm">[visit]</a></p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="font-bold">Option 2</p>
                        <p class="text-primary">Pinehurst golf club and hotel</p>
                        <p>Around 6 km to AIT <a href="https://www.pinehurst.co.th/en/hotel" class="text-sm">[visit]</a>
                        </p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="font-bold">Option 3</p>
                        <p class="text-primary">Novotel Bangkok Future Park Rangsit</p>
                        <p>Around 12 km to AIT <a href="https://novotelbangkokfutureparkrangsit.com/rooms-suites/"
                                class="text-sm">[visit]</a> </p>
                    </div>
                </div>
                <h3 class="text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                    Airport Transportation
                </h3>
                <div class="grid grid-cols-1 gap-4">
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
