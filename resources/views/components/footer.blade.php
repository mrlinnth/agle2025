@props([
    'clients' => [
        [
            'ref' => '#',
            'image' => '/assets/logo/ait-logo.jpg',
            'whiteImage' => '/assets/logo/ait-logo.jpg',
            'name' => 'AIT',
        ],
        [
            'ref' => '#',
            'image' => '/assets/logo/adilade-logo.png',
            'whiteImage' => '/assets/logo/adilade-logo.png',
            'name' => 'Adilade',
        ],
        [
            'ref' => '#',
            'image' => '/assets/logo/chinese-logo.jpeg',
            'whiteImage' => '/assets/logo/chinese-logo.jpeg',
            'name' => 'Chinese',
        ],
    ],
])

<x-countdown />

<footer class="wow fadeInUp relative z-10 bg-white pt-20 lg:pt-[100px]" data-wow-delay=".15s">
    <x-logos :$clients />

    <div class="mt-12 border-t border-gray border-opacity-40 py-8 lg:mt-[60px]">
        <div class="container">
            <div class="text-center">
                <p class="text-base text-dark-4">{{ date('Y') }} &copy; All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
