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
                    <div class="hero-content space-y-6 wow fadeInUp mx-auto max-w-[780px] text-center text-white"
                        data-wow-delay=".2s">
                        <h1 class="leading-snug">
                            International Geographical Union Commission on Agricultural Geography and Land
                            Engineering (AGLE) Annual Conference 2025
                        </h1>
                        <h2 class="text-4xl font-bold leading-snug">
                            "Innovation, Technological Advancement for Rural and Agricultural Resilience"
                        </h2>
                        <p class="font-light">
                            05 November 2025 - Bangkok, Thailand
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-1">
        <div class="container py-20">
            <div class="wow fadeInUp" data-wow-delay=".2s">
                <div class="-mx-4 flex flex-wrap items-center">
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="mb-12 max-w-[540px] lg:mb-0">
                            <h2 class="text-2xl font-extrabold leading-8 sm:text-3xl sm:leading-9">
                                About The Conference
                            </h2>
                            <p class="my-4 text-base leading-relaxed text-body-color">
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
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                                    <img src="/assets/3.jpg" alt="about image"
                                        class="h-full w-full object-cover object-center" />
                                </div>
                            </div>

                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div
                                    class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                                    <img src="/assets/5.jpg" alt="about image"
                                        class="h-full w-full object-cover object-center" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20">
                <div class="-mx-4 flex flex-wrap items-center">
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div
                                    class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                                    <img src="/assets/4.jpg" alt="about image"
                                        class="h-full w-full object-cover object-center" />
                                </div>
                            </div>
                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                                    <img src="/assets/2.jpg" alt="about image"
                                        class="h-full w-full object-cover object-center" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <x-theme />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-publication />

    <x-location />

    <x-countdown />

</x-layout>
