@props([
    'conferenceDetails' => [
        'Presentation sessions',
        'Poster displays and presentations',
        'Field Trips',
        'Networking opportunities',
    ],
])
<div class="">
    <h3 class="mt-2 text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
        Conference Details
    </h3>
    <ul class="mt-8 space-y-3 font-medium">
        @foreach ($conferenceDetails as $text)
            <li class="flex items-start lg:col-span-1">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="ml-3 leading-5 text-gray-600">{{ $text }}</p>
            </li>
        @endforeach
    </ul>
</div>
