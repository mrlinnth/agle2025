@props([
    'themes' => [
        'Land use and land management for Sustainable Development',
        'Innovative Food Systems and Smart Agriculture',
        'Sustainable Rural Environment and Natural Resources',
        'Rural community resilience to environmental changes',
        'Rural and agricultural heritage, socio-cultural conservation',
        'Education, Technological and Social Innovation',
        'Governance and Policy for Rural Inclusion and Sustainability',
    ],
])

<div class="my-10">
    <h2 class="text-2xl font-extrabold leading-8 sm:text-3xl sm:leading-9">
        Conference Themes
    </h2>
    <p class="my-4 text-body-color">
        Researchers and practitioners are invited to explore transformative ideas and share
        their insights which are vital for fostering innovation and resilience in rural
        contexts. Additionally, research papers relevant to the following themes are encouraged
        for submission.
    </p>
    <ul class="mt-8 space-y-3">
        @foreach ($themes as $text)
            <li class="flex items-start lg:col-span-1">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="ml-3 text-body-color">{{ $text }}</p>
            </li>
        @endforeach
    </ul>
</div>
