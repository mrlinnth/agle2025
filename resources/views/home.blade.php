<x-layout>

    <section id="home" class="relative h-screen overflow-hidden bg-cover bg-no-repeat pt-[100px]"
        style="background-image: url('{{ asset('storage/' . $data['banner']['background_image']) }}');">
        <div class="flex md:flex-row-reverse">
            <div class="px-10 py-2 md:py-5 w-full md:w-3/4 h-screen bg-cover bg-white/30 backdrop-blur-sm">
                <div class="h-full grid grid-cols-1 gap-4 text-center md:text-left md:content-stretch">
                    <div>
                        <p class="md:text-xl font-extrabold">
                            {{ $data['banner']['heading'] }}
                        </p>
                        <p class="md:text-2xl font-extrabold">
                            {{ $data['banner']['sub_heading'] }}
                        </p>
                    </div>
                    <div class="">
                        <p
                            class="text-3xl md:text-6xl font-extrabold text-primary-dark [text-shadow:_0_3px_5px_rgb(192_204_161_/_0.7)]">
                            {{ $data['banner']['main_title'] }}
                        </p>
                    </div>
                    <div class="pb-10">
                        <p class="md:text-xl font-extrabold">
                            {{ $data['banner']['duration'] }}
                        </p>
                        <p class="md:text-xl font-extrabold">
                            {{ $data['banner']['location'] }}
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
                    {{ $data['about']['heading'] }}
                </h2>
                <x-paragraph :body="$data['about']['body']" />
            </div>

            <div>
                <h2 class="heading-2">
                    {{ $data['themes']['heading'] }}
                </h2>
                <x-paragraph :body="$data['themes']['body']" />
            </div>

            <div>
                <h2 class="heading-2">
                    {{ $data['publication']['heading'] }}
                </h2>
                <x-paragraph :body="$data['publication']['body']" />
            </div>
        </div>
    </section>

</x-layout>
