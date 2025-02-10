@props([
    'sciTeams' => [
        [
            'name' => 'Prof. Barbaros Gönençgil, Istanbul University, Turkey',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/1.png',
        ],
        [
            'name' => 'Prof. Holly Barcus, Macalester College, USA',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/2.png',
        ],
        [
            'name' => 'Prof. Darren Smith, Loughborough University, UK',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/3.jpg',
        ],
        [
            'name' => 'Prof. Guy, Robinson, University of Adelaide, Australia',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/4.jpg',
        ],
        [
            'name' => 'Prof. Yansui Liu, Chinese Academy of Sciences, China',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/5.jpg',
        ],
        [
            'name' => 'Prof. Rajendra Shrestha, Asian Institute of Technology, Thailand',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/6.jpeg',
        ],
        [
            'name' => 'Prof. Avishek Data, Asian Institute of Technology, Thailand',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/7.jpg',
        ],
        [
            'name' => 'Assoc. Prof. Thi Phuoc Lai Nguyen, Asian Institute of Technology, Thailand',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/8.jpg',
        ],
        [
            'name' => 'Assoc. Prof. Yuheng Li, Chinese Academy of Sciences, China',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/9.jpg',
        ],
    ],
    'orgTeams' => [
        [
            'name' => 'Assoc. Prof. Thi Phuoc Lai Nguyen, Asian Institute of Technology, Thailand',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/8.jpg',
        ],
        [
            'name' => 'Assoc. Prof. Yuheng Li, Chinese Academy of Sciences, China',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/9.jpg',
        ],
        [
            'name' => 'Prof. Guy, Robinson, University of Adelaide, Australia',
            'description' =>
                'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '/assets/speakers/4.jpg',
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
                                    class="h-[120px] w-[120px] rounded-full" />
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold">{{ $team['name'] }}</h4>
                                <p class="mb-5 text-sm">{{ $team['description'] }}</p>
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
                Organizational Committee
            </h2>
            <div class="-mx-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($orgTeams as $team)
                    <div class="">
                        <div class="wow fadeInUp group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial"
                            data-wow-delay=".1s">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="{{ $team['image'] }}" alt="team image"
                                    class="h-[120px] w-[120px] rounded-full" />
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold">{{ $team['name'] }}</h4>
                                <p class="mb-5 text-sm">{{ $team['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
