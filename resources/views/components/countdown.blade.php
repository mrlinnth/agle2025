<section id="deadline" class="bg-primary-fade">
    <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:items-center">
        <div class="mx-auto max-w-xl text-center text-white">
            <h2 class="text-lg">{{ $countdown['title'] }}</h2>
            <p class="text-lg font-extrabold">
                {{ \Carbon\Carbon::parse($countdown['date'])->toFormattedDateString() }}
            </p>
            <h2 class="text-3xl font-extrabold sm:text-5xl my-4">
                <span id="day">-</span> : <span id="hour">-</span> : <span id="minute">-</span> : <span
                    id="second">-</span>
            </h2>
            <p class="mb-4" id="countdown_status">days left</p>
            <a href="/register" class="btn-secondary">
                Start Your Registration
            </a>
        </div>
    </div>
</section>

<script>
    // // Getting formated date from date string
    const countdown = @json($countdown);
    const deadline = new Date(countdown.date).getTime();
    // Calling defined function at certain interval
    const x = setInterval(function() {
        // Getting current date and time in required format
        const now = new Date().getTime();

        // Calculating difference
        const t = deadline - now;

        // Getting values of days,hours,minutes, seconds
        const days = Math.floor(t / (1000 * 60 * 60 * 24));
        const hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((t % (1000 * 60)) / 1000);

        // Show the output time
        document.getElementById("day").innerHTML = days;
        document.getElementById("hour").innerHTML = hours;
        document.getElementById("minute").innerHTML = minutes;
        document.getElementById("second").innerHTML = seconds;

        // Show overtime output
        if (t < 0) {
            clearInterval(x);
            document.getElementById("countdown_status").innerHTML = "Registration is closed";
            document.getElementById("day").innerHTML = "0";
            document.getElementById("hour").innerHTML = "0";
            document.getElementById("minute").innerHTML = "0";
            document.getElementById("second").innerHTML = "0";
        }
    }, 1000);
</script>
