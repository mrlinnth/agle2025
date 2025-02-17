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

<x-layout>

    <section id="home"
        class="relative h-full lg:h-screen overflow-hidden bg-cover bg-no-repeat pt-[120px] md:pt-[130px] lg:pt-[160px]"
        style="background-image: url('/assets/6.jpg');">
        <div class="container backdrop-blur-sm [text-shadow:_0_2px_4px_rgb(99_102_241_/_0.8)]">
            <div class="-mx-4 mt-12 md:mt-20 flex flex-wrap items-center justify-center">
                <div class="w-full px-4 py-8">
                    <div class="hero-content space-y-6 wow fadeInUp mx-auto text-center text-white" data-wow-delay=".2s">
                        <h1 class="text-lg font-bold leading-snug">
                            {{ $setting->event_name }}
                        </h1>
                        <h2 class="text-6xl font-extrabold leading-snug">
                            {{ $setting->event_title }}
                        </h2>
                        <p class="text-lg font-bold">
                            {{ $setting->event_duration }} - {{ $setting->event_location }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-1">
        <div class="container py-20">
            <h2 class="text-2xl font-extrabold leading-8 sm:text-3xl sm:leading-9">
                About The Conference
            </h2>
            <p class="my-4 text-base leading-relaxed text-body-color text-justify">
                The 2025 AGLE conference on “Rural Innovation and Technological Advance for Sustainable
                and Resilient Development” will be held from 5-8 November 2025 in Bangkok, Thailand. The
                conference will include two days of presentations and poster sessions and two days of
                field trips to rural Thailand.<br /><br>
                This scientific event aims to promote the convergence of scientific knowledge and
                practical actions to advance innovation, technology development, and applications for
                rural sustainability and resilience. The conference is organized by the IGU Commission
                on Agricultural Geography and Land Engineering (AGLE) and hosted by the Asian Institute
                of Technology (AIT), Thailand.<br /><br>
                The conference will feature high-level, inclusive, evidence-based discussions on the
                current challenges and priorities related to advancing innovation and technology for
                long-term rural sustainability, with a focus on contributing to the United Nations’
                Sustainable Development Goals (SDGs). This event offers a valuable opportunity for both
                early stage and established researchers and practitioners, to showcase their work,
                exchange ideas, and engage with globally renowned experts in the field. It also provides
                a platform to enhance participants' expertise and professional recognition in rural
                sustainability. Furthermore, the conference fosters cooperation and strengthens
                collaborative efforts to address rural challenges and promote sustainable development
                through innovative solutions.
            </p>

            <x-theme />
        </div>
    </section>

    <x-publication />

    <section class="bg-gray-1">
        <div class="container py-20">
            <x-location />
        </div>
    </section>

    <x-countdown :deadline="$setting->event_deadline" />

</x-layout>
