<x-layout>
    <x-breadcrumb>
        Committee
    </x-breadcrumb>

    <section class="py-20 bg-gray-1">
        <div class="container">
            <h2 class="mb-5 text-3xl font-bold leading-tight sm:text-[40px] sm:leading-[1.2]">
                Scientific Committee
            </h2>
            <div class="-mx-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($committees as $team)
                    <div class="">
                        <div class="wow fadeInUp group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial"
                            data-wow-delay=".1s">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="{{ asset('storage/' . $team['photo']) }}" alt="{{ $team['name'] }}"
                                    class="h-[120px] w-[120px] rounded border" />
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold">{{ $team['name'] }}</h4>
                                <p class="">{{ $team['institute'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-20">
        <div class="container">
            <h2 class="mb-5 text-3xl font-bold leading-tight sm:text-[40px] sm:leading-[1.2]">
                Conference Organizers
            </h2>
            <div class="-mx-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($organizers as $team)
                    <div class="">
                        <div class="wow fadeInUp group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial"
                            data-wow-delay=".1s">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="{{ asset('storage/' . $team['photo']) }}" alt="{{ $team['name'] }}"
                                    class="h-[120px] w-[120px] rounded border" />
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold">{{ $team['name'] }}</h4>
                                <p class="">{{ $team['institute'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
