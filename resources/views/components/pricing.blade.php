@props([
    'pricings' => [
        'Researchers from Global South: $350',
        'Students from Global South: $170',
        'Students: $250',
        'Others: $400',
    ],
    'discounts' => [
        'Researchers from Global South: $250',
        'Students from Global South: $150',
        'Students: $200',
        'Others: $300',
    ],
])

<section id="fee" class="py-32">
    <div class="container">
        <div class="grid place-items-center">
            <div class="m-auto flex w-full flex-col items-center gap-4 text-center">
                <h3 class="text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                    Conference Fee
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="w-full bg-gray-50 shadow-sm">
                        <div><br></div>
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="text-2xl font-semibold leading-none tracking-tight">Regular</h3>
                        </div>
                        <div class="p-6 pt-0">
                            <ul class="list-inside list-disc">
                                @foreach ($pricings as $text)
                                    <li class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="inline-block text-primary-light">
                                            <path
                                                d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                                            <path d="m9 12 2 2 4-4" />
                                        </svg>
                                        <span class="flex-1 text-left">{{ $text }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="w-full bg-warning shadow-sm">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <div
                                class="focus:ring-ring text-foreground m-auto inline-flex w-fit items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2">
                                Until June 30, 2025
                            </div>
                            <h3 class="text-2xl font-semibold leading-none tracking-tight">
                                Early Bird Discount
                            </h3>
                        </div>
                        <div class="p-6 pt-0">
                            <ul class="list-inside list-disc">
                                @foreach ($discounts as $text)
                                    <li class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="inline-block text-primary-light">
                                            <path
                                                d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                                            <path d="m9 12 2 2 4-4" />
                                        </svg>
                                        <span class="flex-1 text-left">{{ $text }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="font-bold text-primary my-4">The best abstracts submitted by early-stage researchers from the
                    Global South will be selected for an
                    award of registration fee waiver.</p>
                <h3 class="text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                    Field Trip Fee (Optional)
                </h3>
                <ul class="">
                    <li>Two Days Field Trip: $100 (inlucding food and transportation)</li>
                    <li>Gala Dinner: $55 (including transportation)</li>
                </ul>
            </div>
        </div>
    </div>
</section>
