@props([
    'menuItems' => [
        [
            'title' => 'Home',
            'path' => '/',
        ],
        [
            'title' => 'About Us',
            'path' => '/about',
        ],
        [
            'title' => 'Services',
            'path' => '/services',
        ],
        [
            'title' => 'Contact Us',
            'path' => '/contact',
        ],
    ]
])


<header class="ud-header absolute left-0 top-0 z-40 flex w-full items-center bg-transparent">
  <div class="container">
    <div class="relative -mx-4 flex items-center justify-between">
      <div class="w-60 max-w-full px-4">
        <a href="/" class="navbar-logo block w-full py-5">
          <img src="/assets/logo/agle-logo.jpeg" alt="logo" class="header-logo w-2/3" />
        </a>
      </div>
      <div>
        <button
          id="navbarToggler"
          class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
        >
          <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark dark:bg-white"></span>
          <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark dark:bg-white"></span>
          <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark dark:bg-white"></span>
        </button>
        <nav
          id="navbarCollapse"
          class="w-full rounded-lg bg-white py-5 shadow-lg dark:bg-dark-2 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-4 2xl:px-6"
        >
          <ul class="flex">
            @foreach ($menuItems as $item)
                <li class="group relative">
                  <a
                    href="{{$item['path']}}"
                    class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 xl:ml-10"
                  >
                    {{$item['title']}}
                  </a>
                </li>
            @endforeach
          </ul>
        </nav>
      </div>
      <div class="flex items-center justify-end pr-16 lg:pr-0">
        <ul class="flex">
          <a
            href="/submission"
            class="loginBtn px-[22px] py-2 text-base font-medium text-dark hover:text-primary"
          >
            Submission
          </a>
          <a
            href="/registration"
            class="registrationBtn hover:bg-primary-light rounded-md bg-primary px-6 py-2 text-base font-medium text-white duration-300 ease-in-out"
          >
            Registration
          </a>
        </ul>
      </div>
    </div>
  </div>
</header>
