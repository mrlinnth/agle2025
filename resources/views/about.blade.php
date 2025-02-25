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
                <h2 class="heading-2">
                    Conference Dates
                </h2>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 md:gap-4 w-full md:w-2/3">
                    <div class="bg-secondary-fade p-4 rounded-xl my-4 shadow-md w-full">
                        <h3 class="font-bold text-lg">{{ $data['details']['presentation_title'] }}</h3>
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
                            <h3 class="font-bold text-lg text-center">{{ $data['details']['presentation_date'] }}</h3>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4 w-full md:w-2/3">
                    <div class="bg-primary-fade p-4 rounded-xl my-4 shadow-md w-full">
                        <h3 class="font-bold text-lg">{{ $data['details']['trip_title'] }}</h3>
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
                            <h3 class="font-bold text-lg text-center">{{ $data['details']['trip_date'] }}</h3>
                        </div>
                    </div>
                </div>
                <div class="p-2 w-full md:w-2/3">
                    <x-paragraph :body="$data['details']['body']" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4 w-full md:w-2/3">
                    <div class="bg-gray-2 p-4 rounded-xl my-4 shadow-md w-full">
                        <h3 class="font-bold text-lg">{{ $data['details']['dinner_title'] }}</h3>
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
                            <h3 class="font-bold text-lg text-center">{{ $data['details']['dinner_date'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-10 flex flex-col gap-8">
                <h2 class="heading-2">
                    Important Dates
                </h2>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex gap-8 items-center">
                        <div class="w-16 h-16 p-2 text-center rounded-lg bg-primary-fade">
                            <p class="font-semibold">
                                <strong
                                    class="text-2xl">{{ \Carbon\Carbon::parse($data['important']['abstract_deadline_date'])->format('d') }}</strong>
                                {{ \Carbon\Carbon::parse($data['important']['abstract_deadline_date'])->format('M') }}
                            </p>
                        </div>
                        <div>
                            <p class="font-bold">{{ $data['important']['abstract_deadline_title'] }}</p>
                            <p class="">
                                {{ \Carbon\Carbon::parse($data['important']['abstract_deadline_date'])->toFormattedDateString() }}
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="w-16 h-16 p-2 text-center rounded-lg bg-primary-fade">
                            <p class="font-semibold">
                                <strong
                                    class="text-2xl">{{ \Carbon\Carbon::parse($data['important']['abstract_acceptance_date'])->format('d') }}</strong>
                                {{ \Carbon\Carbon::parse($data['important']['abstract_acceptance_date'])->format('M') }}
                            </p>
                        </div>
                        <div>
                            <p class="font-bold">{{ $data['important']['abstract_acceptance_title'] }}</p>
                            <p class="">
                                {{ \Carbon\Carbon::parse($data['important']['abstract_acceptance_date'])->toFormattedDateString() }}
                            </p>
                        </div>
                    </div>
                    <div class="mt-8 flex gap-8 items-center">
                        <div class="w-16 h-16 p-2 text-center rounded-lg bg-secondary-fade">
                            <p class="font-semibold">
                                <strong
                                    class="text-2xl">{{ \Carbon\Carbon::parse($data['important']['earlybird_deadline_date'])->format('d') }}</strong>
                                {{ \Carbon\Carbon::parse($data['important']['earlybird_deadline_date'])->format('M') }}
                            </p>
                        </div>
                        <div>
                            <p class="font-bold">{{ $data['important']['earlybird_deadline_title'] }}</p>
                            <p class="">
                                {{ \Carbon\Carbon::parse($data['important']['earlybird_deadline_date'])->toFormattedDateString() }}
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="w-16 h-16 p-2 text-center rounded-lg bg-secondary-fade">
                            <p class="font-semibold">
                                <strong
                                    class="text-2xl">{{ \Carbon\Carbon::parse($data['important']['regular_deadline_date'])->format('d') }}</strong>
                                {{ \Carbon\Carbon::parse($data['important']['regular_deadline_date'])->format('M') }}
                            </p>
                        </div>
                        <div>
                            <p class="font-bold">{{ $data['important']['regular_deadline_title'] }}</p>
                            <p class="">
                                {{ \Carbon\Carbon::parse($data['important']['regular_deadline_date'])->toFormattedDateString() }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-10 flex flex-col gap-4">
                <h2 class="mb-4 heading-2">
                    Conference Fee
                </h2>
                <div class="mb-4 grid grid-cols-1 md:grid-cols-4 gap-4 w-full">
                    <div class="md:col-span-2 flex flex-col gap-4">
                        <div class="bg-yellow-300 p-2 rounded-xl w-full h-20 flex flex-col items-center justify-center">
                            <h3 class="font-bold text-lg">Participants Type</h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-teal-300 p-2 rounded-xl w-full h-20 flex flex-col items-center justify-center">
                            <h3 class="font-bold text-lg">Early Bird</h3>
                            <p class="">(Until
                                {{ \Carbon\Carbon::parse($data['important']['regular_deadline_date'])->toFormattedDateString() }})
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-blue-300 p-2 rounded-xl w-full h-20 flex flex-col items-center justify-center">
                            <h3 class="font-bold text-lg">Regular</h3>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 w-full">
                    <div class="md:col-span-2 flex flex-col gap-4">
                        <div class="bg-yellow-200 p-2 rounded-xl w-full flex items-center">
                            <h3 class="pl-2">&bull; {{ $data['fee']['type_1_title'] }}</h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-teal-200 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">{{ $data['fee']['type_1_earlybird'] }}</h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-blue-200 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">{{ $data['fee']['type_1_regular'] }}</h3>
                        </div>
                    </div>
                </div>
                <div class="mb-4 grid grid-cols-1 md:grid-cols-4 gap-4 w-full">
                    <div class="md:col-span-2 flex flex-col gap-4">
                        <div class="bg-yellow-100 p-2 rounded-xl w-full flex items-center">
                            <h3 class="pl-4">&bull; {{ $data['fee']['type_2_title'] }}</h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-teal-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">{{ $data['fee']['type_2_earlybird'] }}</h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-blue-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">{{ $data['fee']['type_2_regular'] }}</h3>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 w-full">
                    <div class="md:col-span-2 flex flex-col gap-4">
                        <div class="bg-yellow-200 p-2 rounded-xl w-full flex items-center">
                            <h3 class="pl-2">&bull; {{ $data['fee']['type_3_title'] }}</h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-teal-200 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">{{ $data['fee']['type_3_earlybird'] }}</h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-blue-200 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">{{ $data['fee']['type_3_regular'] }}</h3>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 w-full">
                    <div class="md:col-span-2 flex flex-col gap-4">
                        <div class="bg-yellow-100 p-2 rounded-xl w-full flex items-center">
                            <h3 class="pl-4">&bull; {{ $data['fee']['type_4_title'] }}</h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-teal-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">{{ $data['fee']['type_4_earlybird'] }}</h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="bg-blue-100 p-2 rounded-xl w-full flex items-center justify-center">
                            <h3 class="">{{ $data['fee']['type_4_regular'] }}</h3>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-2 p-4 rounded-xl flex flex-col">
                    <h3 class="font-bold text-lg">Optional</h3>
                    <x-paragraph :body="$data['fee']['optional']" />
                </div>
                <p class="text-primary text-lg font-extrabold text-justify">{{ $data['fee']['best_abstract'] }}</p>
            </div>
            <div class="my-10 flex flex-col gap-8">
                <h2 class="heading-2">
                    Conference Location
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex flex-col gap-4">
                        <p><strong>{{ $data['location']['title'] }}</strong></p>
                        <p>{{ $data['location']['address'] }}</p>
                    </div>
                    <div>
                        <iframe class="w-full h-[300px]" src="{{ $data['location']['map'] }}" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="my-10 flex flex-col gap-8">
                <h2 class="heading-2">
                    Information on Accommodation and Transportation
                </h2>
                <div>
                    <h3 class="text-xl font-extrabold leading-8">
                        Accommodation
                    </h3>
                    <x-paragraph :body="$data['accommodation']" />
                </div>
                <div>
                    <h3 class="mt-4 text-xl font-extrabold leading-8">
                        Airport Transportation
                    </h3>
                    <x-paragraph :body="$data['transportation']" />
                </div>
            </div>
        </div>
    </section>

</x-layout>
