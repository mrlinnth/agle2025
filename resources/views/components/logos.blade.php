<section class="">
    <div class="container">
        <div class="flex flex-row gap-10 justify-center items-center">
            @foreach ($clients as $client)
                <div>
                    <a class="" href={{ $client['ref'] }} target="_blank" rel="nofollow noopner">
                        <img src={{ $client['image'] }} alt={{ $client['name'] }} class="w-24" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
