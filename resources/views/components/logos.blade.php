<section class="">
    <div class="container">
        <div class="flex flex-col md:flex-row gap-10 justify-between items-center">
            <div>
                <a class="" href="/" target="_blank" rel="nofollow noopner">
                    <img src="{{ asset("storage/$logo") }}" alt="AGLE" class="w-28" />
                </a>
            </div>
            <div class="flex flex-col md:flex-row gap-10 justify-center items-center">
                @foreach ($center_logos as $i)
                    <div>
                        <a class="" href="#" target="_blank" rel="nofollow noopner">
                            <img src="{{ asset("storage/$i") }}" alt="partner logo" class="w-16" />
                        </a>
                    </div>
                @endforeach
            </div>
            <div>
                <a class="" href="#" target="_blank" rel="nofollow noopner">
                    <img src="{{ asset("storage/$end_logo") }}" alt="ELsevier" class="w-28" />
                </a>
            </div>
        </div>
    </div>
</section>
