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

    <section id="home" class="relative h-full lg:h-screen overflow-hidden bg-cover bg-no-repeat pt-[100px]"
        style="background-image: url('/assets/6.jpg');">
        <div class="flex flex-row-reverse">
            <div class="px-10 py-5 w-3/4 h-full lg:h-screen bg-cover bg-white/30 backdrop-blur-sm">
                <div class="h-full grid grid-cols-1 gap-4 content-stretch">
                    <div>
                        <p class="text-2xl font-extrabold">
                            International Geographical Union (IGU) Commission on Agricultural Geography and Land
                            Engineering (AGLE)
                        </p>
                        <p class="text-3xl font-extrabold">Annual Conference 2025</p>
                    </div>
                    <div class="">
                        <p
                            class="text-8xl font-extrabold text-primary-dark [text-shadow:_0_3px_5px_rgb(192_204_161_/_0.7)]">
                            {{ $setting->event_title }}
                        </p>
                    </div>
                    <div class="pb-10">
                        <p class="text-2xl font-bold">
                            {{ $setting->event_duration }}
                        </p>
                        <p class="text-2xl font-bold">{{ $setting->event_location }}</p>
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
                The 2025 AGLE conference on “Technological Advancement and Social Innovation for Rural and Agricultural
                Resilience” will be held from 5-8 November 2025 in Bangkok, Thailand. The conference will include two
                days of presentations and poster sessions and two days of
                field trips to rural Thailand.<br /><br>
                This scientific event aims to promote the convergence of scientific knowledge and practical actions to
                advance
                innovation, technological development, and applications for rural sustainability and resilience. The
                conference
                is organized by the IGU Commission on Agricultural Geography and Land Engineering (AGLE) in
                collaboration with
                the Asian Institute of Technology (AIT), Thailand.<br /><br>
                The conference will feature high-level, inclusive, evidence-based discussions on the current challenges
                and
                priorities related to advancing innovation and technology for long-term rural sustainability, with a
                focus on
                contributing to the United Nations’ Sustainable Development Goals (SDGs). This event offers a valuable
                opportunity for both early stage and established researchers and practitioners, to showcase their work,
                exchange ideas, and engage with globally renowned experts in the field. It also provides a platform to
                enhance
                participants&#39; expertise and professional recognition in rural sustainability.
                The conference fosters cooperation and strengthens collaborative efforts to address rural
                challenges and promote sustainable development through innovative solutions.
            </p>

            <x-theme />

            <h2 class="my-4 text-2xl font-extrabold leading-8 sm:text-3xl sm:leading-9">
                Publication Opportunities
            </h2>
            <p class="my-4 text-base leading-relaxed text-body-color text-justify">
                The conference will partner with Journal of Rural Studies, Elsevier and Research in Globalization,
                Elsevier to publish special issues featuring select conference papers. The best abstracts will be
                invited to submit full papers for consideration in these special issues.</p>
        </div>
    </section>

</x-layout>
