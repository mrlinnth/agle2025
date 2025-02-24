@props([
    'sciTeams' => [
        [
            'name' => 'Prof. Holly BARCUS',
            'description' => 'Macalester College, USA',
            'image' => '/assets/speakers/2.jpg',
        ],
        [
            'name' => 'Prof. Avishek DATA',
            'description' => 'Asian Institute of Technology, Thailand',
            'image' => '/assets/speakers/7.jpg',
        ],
        [
            'name' => 'Prof. Barbaros GÖNENÇGIL',
            'description' => 'Istanbul University, Turkey',
            'image' => '/assets/speakers/1.jpg',
        ],
        [
            'name' => 'Prof. Yansui LIU',
            'description' => 'Chinese Academy of Sciences, China',
            'image' => '/assets/speakers/5.jpg',
        ],
        [
            'name' => 'Assoc. Prof. Yuheng LI',
            'description' => 'Chinese Academy of Sciences, China',
            'image' => '/assets/speakers/9.jpg',
        ],
        [
            'name' => 'Assoc. Prof. Thi Phuoc Lai NGUYEN',
            'description' => 'Asian Institute of Technology, Thailand',
            'image' => '/assets/speakers/8.jpg',
        ],
        [
            'name' => 'Prof. Guy, ROBINSON',
            'description' => 'University of Adelaide, Australia',
            'image' => '/assets/speakers/4.jpg',
        ],
        [
            'name' => 'Prof. Rajendra SHRESTHA',
            'description' => 'Asian Institute of Technology, Thailand',
            'image' => '/assets/speakers/6.jpg',
        ],
        [
            'name' => 'Prof. Darren SMITH',
            'description' => 'Loughborough University, UK',
            'image' => '/assets/speakers/3.jpg',
        ],
    ],
    'orgTeams' => [
        [
            'name' => 'Assoc. Prof. Thi Phuoc Lai NGUYEN',
            'description' => 'Asian Institute of Technology, Thailand',
            'image' => '/assets/speakers/8.jpg',
        ],
        [
            'name' => 'Prof. Guy, ROBINSON',
            'description' => 'University of Adelaide, Australia',
            'image' => '/assets/speakers/4.jpg',
        ],
        [
            'name' => 'Assoc. Prof. Yuheng LI',
            'description' => 'Chinese Academy of Sciences, China',
            'image' => '/assets/speakers/9.jpg',
        ],
    ],
])

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
                @foreach ($sciTeams as $team)
                    <div class="">
                        <div class="wow fadeInUp group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial"
                            data-wow-delay=".1s">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="{{ $team['image'] }}" alt="team image"
                                    class="h-[120px] w-[120px] rounded border" />
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold">{{ $team['name'] }}</h4>
                                <p class="">{{ $team['description'] }}</p>
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
                @foreach ($orgTeams as $team)
                    <div class="">
                        <div class="wow fadeInUp group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial"
                            data-wow-delay=".1s">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="{{ $team['image'] }}" alt="team image"
                                    class="h-[120px] w-[120px] rounded border" />
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold">{{ $team['name'] }}</h4>
                                <p class="">{{ $team['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
