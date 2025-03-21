@props([
    'menuItems' => [
        [
            'title' => 'Home',
            'path' => '/',
        ],
        [
            'title' => 'Conference Details',
            'path' => '/about',
        ],
        [
            'title' => 'Committee',
            'path' => '/committee',
        ],
        [
            'title' => 'Abstract Submission',
            'path' => '/abstract',
        ],
        [
            'title' => 'Registration',
            'path' => '/register',
        ],
        [
            'title' => 'Contact',
            'path' => '/contact',
        ],
    ],
])


<header class="ud-header h-[100px] bg-white shadow-sm fixed top-0 left-0 right-0 z-50">
    <div class="container">
        <div class="flex h-24 items-center justify-between">
            <div class="md:flex md:items-center md:gap-12">
                <a class="block" href="/">
                    <img src="{{ asset("storage/$logo") }}" alt="logo" class="header-logo w-2/5" />
                </a>
            </div>


            <div class="flex items-center gap-4">
                <nav aria-label="Global" class="hidden lg:flex">
                    <ul class="flex items-center gap-6 text-sm">
                        @foreach ($menuItems as $item)
                            @isset($item['subMenu'])
                                <li class="dropdown">
                                    <a class="font-medium text-base transition hover:text-primary" href="#">
                                        {{ $item['title'] }} </a>
                                    <div
                                        class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                                        <div class="absolute left-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                            aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117"
                                            role="menu">
                                            <div class="py-1">
                                                @foreach ($item['subMenu'] as $subItem)
                                                    <a class="flex justify-between w-full px-4 py-2 text-sm leading-5 text-left hover:text-primary"
                                                        role="menuitem" href="{{ $subItem['path'] }}">
                                                        {{ $subItem['title'] }} </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endisset

                            @empty($item['subMenu'])
                                <li>
                                    <a class="font-medium text-base transition hover:text-primary"
                                        href="{{ $item['path'] }}">
                                        {{ $item['title'] }} </a>
                                </li>
                            @endempty
                        @endforeach
                    </ul>
                </nav>

                <div class="block lg:hidden">
                    <div class=" relative inline-block text-left dropdown">
                        <button
                            class="burger rounded-sm bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                        <div
                            class="links hidden absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none">
                            <div class="py-1">
                                @foreach ($menuItems as $item)
                                    <a class="flex justify-between w-full px-4 py-2 text-sm leading-5 text-left hover:text-primary"
                                        role="menuitem" href="{{ $item['path'] }}">
                                        {{ $item['title'] }} </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
