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

<div class="" id="theme">
    <h2 class="text-2xl font-extrabold leading-8 sm:text-3xl sm:leading-9">
        Conference Themes
    </h2>
    <p class="my-4 text-body-color">
        Abstract submissions, both oral and poster presentation sessions must be in English. Participants are
        encouraged to submit the research on one or more topics (but are not limited to these.)
    </p>
    <ul class="pl-8 list-decimal">
        @foreach ($themes as $text)
            <li class="">
                <p class="">{{ $text }}</p>
            </li>
        @endforeach
    </ul>
</div>
