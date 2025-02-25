<x-layout>

    <section id="home" class="relative h-screen overflow-hidden bg-cover bg-no-repeat pt-[100px]"
        style="background-image: url('/assets/6.jpg');">
        <div class="flex md:flex-row-reverse">
            <div class="px-10 py-2 md:py-5 w-full md:w-3/4 h-screen bg-cover bg-white/30 backdrop-blur-sm">
                <div class="h-full grid grid-cols-1 gap-4 text-center md:text-left md:content-stretch">
                    <div>
                        <p class="md:text-xl font-extrabold">
                            {{ $setting->home['banner']['heading'] }}
                        </p>
                        <p class="md:text-2xl font-extrabold">
                            {{ $setting->home['banner']['sub_heading'] }}
                        </p>
                    </div>
                    <div class="">
                        <p
                            class="text-3xl md:text-6xl font-extrabold text-primary-dark [text-shadow:_0_3px_5px_rgb(192_204_161_/_0.7)]">
                            {{ $setting->home['banner']['main_title'] }}
                        </p>
                    </div>
                    <div class="pb-10">
                        <p class="md:text-xl font-extrabold">
                            {{ $setting->home['banner']['duration'] }}
                        </p>
                        <p class="md:text-xl font-extrabold">
                            {{ $setting->home['banner']['location'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-1">
        <div class="container py-20 space-y-8">
            <div>
                <h2 class="heading-2">
                    {{ $setting->home['about']['heading'] }}
                </h2>
                <x-paragraph :body="$setting->home['about']['body']" />
            </div>

            <div>
                <h2 class="heading-2">
                    {{ $setting->home['themes']['heading'] }}
                </h2>
                <x-paragraph :body="$setting->home['themes']['body']" />
            </div>

            <div>
                <h2 class="heading-2">
                    {{ $setting->home['publication']['heading'] }}
                </h2>
                <x-paragraph :body="$setting->home['publication']['body']" />
            </div>
        </div>
    </section>

</x-layout>
