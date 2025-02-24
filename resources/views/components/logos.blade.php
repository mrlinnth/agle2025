<section class="">
    <div class="container">
        <div class="flex flex-col md:flex-row gap-10 justify-between items-center">
            <div>
                <a class="" href="/" target="_blank" rel="nofollow noopner">
                    <img src="/assets/logo/agle-logo.jpeg" alt="AGLE" class="w-28" />
                </a>
            </div>
            <div class="flex flex-col md:flex-row gap-10 justify-center items-center">
                @foreach ($clients as $client)
                    <div>
                        <a class="" href={{ $client['ref'] }} target="_blank" rel="nofollow noopner">
                            <img src={{ $client['image'] }} alt={{ $client['name'] }} class="w-24" />
                        </a>
                    </div>
                @endforeach
            </div>
            <div>
                <a class="" href="/" target="_blank" rel="nofollow noopner">
                    <img src="/assets/logo/elsevier-logo.png" alt="ELsevier" class="w-36" />
                </a>
            </div>
        </div>
    </div>
</section>
