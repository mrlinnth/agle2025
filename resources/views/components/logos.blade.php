<section class="py-4">
    <div class="container">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 justify-items-center">
            @foreach ($clients as $client)
                <a class="" href={{ $client['ref'] }} target="_blank" rel="nofollow noopner">
                    <img src={{ $client['image'] }} alt={{ $client['name'] }} class="w-24" />
                </a>
            @endforeach
        </div>
    </div>
</section>
