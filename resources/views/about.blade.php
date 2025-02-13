@props([
    'conferenceDetails' => [
        'Presentation sessions',
        'Poster displays and presentations',
        'Field Trips',
        'Networking opportunities',
    ],
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
    <x-breadcrumb>
        About
    </x-breadcrumb>

    <section class="py-20 bg-gray-1" id="details">
        <div class="container">
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
            <div class="my-10">
                <h3 class="mt-2 text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                    Conference Agenda
                </h3>
                <div class="mt-8 flex flex-wrap">
                    <div class="overflow-x-auto rounded-lg">
                        <table class="w-full divide-y-2 divide-gray-200">
                            <thead class="">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium">Date</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium">Time</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium">Activity</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium">Location</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium">Nov 5, 2025</td>
                                    <td class="whitespace-nowrap px-4 py-2">10:00 AM</td>
                                    <td class="whitespace-nowrap px-4 py-2">Presentation</td>
                                    <td class="whitespace-nowrap px-4 py-2">AIT Convention Centre, Pathum Thani,
                                        Thailand</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium">Nov 6, 2025</td>
                                    <td class="whitespace-nowrap px-4 py-2">10:00 AM</td>
                                    <td class="whitespace-nowrap px-4 py-2">Presentation</td>
                                    <td class="whitespace-nowrap px-4 py-2">AIT Convention Centre, Pathum Thani,
                                        Thailand</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium">Nov 7, 2025</td>
                                    <td class="whitespace-nowrap px-4 py-2">10:00 AM</td>
                                    <td class="whitespace-nowrap px-4 py-2">Presentation</td>
                                    <td class="whitespace-nowrap px-4 py-2">AIT Convention Centre, Pathum Thani,
                                        Thailand</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium">Nov 8, 2025</td>
                                    <td class="whitespace-nowrap px-4 py-2">10:00 AM</td>
                                    <td class="whitespace-nowrap px-4 py-2">Presentation</td>
                                    <td class="whitespace-nowrap px-4 py-2">AIT Convention Centre, Pathum Thani,
                                        Thailand</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="my-10">
                <h2 class="mt-2 text-2xl font-extrabold leading-8 sm:text-3xl sm:leading-9">
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
        </div>
    </section>

    <section id="location" class="py-20">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay=".2s">
                <div class="-mx-4 flex flex-wrap items-center">
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="mb-12 max-w-[540px] lg:mb-0">
                            <h2 class="mb-5 text-3xl font-bold leading-tight text-dark sm:text-[40px] sm:leading-[1.2]">
                                Location
                            </h2>
                            <p class="mb-10 text-base leading-relaxed text-body-color">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur illum magni eum
                                accusamus quam, neque perspiciatis inventore consectetur reprehenderit itaque
                                laboriosam impedit enim nihil sit, animi deleniti, sequi consequatur voluptatem?
                                <br />
                                <br />
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, labore ut provident error
                                nostrum molestiae obcaecati, beatae nobis nihil alias voluptate quasi. Temporibus, enim?
                                Dolor atque consequatur ipsa laudantium magni.
                            </p>
                        </div>
                    </div>

                    <div class="w-full px-4 lg:w-1/2">
                        <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                                    <img src="/assets/about/about-image-01.jpg" alt="about image"
                                        class="h-full w-full object-cover object-center" />
                                </div>
                            </div>

                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div
                                    class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                                    <img src="/assets/about/about-image-02.jpg" alt="about image"
                                        class="h-full w-full object-cover object-center" />
                                </div>
                                <div
                                    class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                                    <img src="/assets/about/about-image-02.jpg" alt="about image"
                                        class="h-full w-full object-cover object-center" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="field-trip" class="py-20 bg-gray-1">
        <div class="container">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
                <div>
                    <img src="/assets/about/location.jpg" class="rounded" alt="" />
                </div>
                <div>
                    <div class="max-w-lg md:max-w-none">
                        <h2 class="mb-5 text-3xl font-bold leading-tight text-dark sm:text-[40px] sm:leading-[1.2]">
                            Field Trip
                        </h2>

                        <p class="mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur doloremque saepe
                            architecto maiores repudiandae amet perferendis repellendus, reprehenderit voluptas
                            sequi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="abstract" class="py-20">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
                        <h2 class="mb-3 text-3xl font-bold sm:text-4xl md:text-[40px] md:leading-[1.2]">
                            Abstract Submission
                        </h2>
                        <p class="text-base">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ab voluptatum,
                            provident voluptates vitae facilis possimus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="publication" class="py-20 bg-gray-1">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
                        <h2 class="mb-3 text-3xl font-bold sm:text-4xl md:text-[40px] md:leading-[1.2]">
                            Publication Option
                        </h2>
                        <p class="text-base">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ab voluptatum,
                            provident voluptates vitae facilis possimus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-countdown />

    <x-pricing />

</x-layout>
