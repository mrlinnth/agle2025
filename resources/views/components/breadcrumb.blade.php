<section class="bg-secondary-light relative z-10 overflow-hidden pb-[60px] pt-[120px] md:pt-[130px] lg:pt-[160px]">
    <div
        class="absolute bottom-0 left-0 h-px w-full bg-gradient-to-r from-stroke/0 via-stroke to-stroke/0 dark:via-dark-3">
    </div>
    <div class="container">
        <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full px-4">
                <div class="text-center">
                    <h1 class="mb-4 text-3xl font-bold sm:text-4xl md:text-[40px] md:leading-[1.2]">
                        {{ $slot }}
                    </h1>

                    <ul class="flex items-center justify-center gap-[10px]">
                        <li>
                            <a href="/"
                                class="flex items-center gap-[10px] text-base hover:text-primary font-medium">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="flex items-center text-dark-4 gap-[10px] font-medium">
                                <span class=""> /</span>
                                {{ $slot }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
