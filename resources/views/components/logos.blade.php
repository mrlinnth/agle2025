<section class="py-4">
    <div class="container px-4">
        <div class="-mx-4 flex flex-wrap items-center justify-center gap-8 xl:gap-11">
            @foreach ($clients as $client)
                <a href={{ $client['ref'] }} target="_blank" rel="nofollow noopner">
                    <img src={{ $client['image'] }} alt={{ $client['name'] }} class="w-24" />
                </a>
            @endforeach
        </div>
    </div>
</section>
