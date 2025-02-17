<x-layout>
    <x-breadcrumb>
        Contact
    </x-breadcrumb>

    <section class="py-20 bg-gray-1">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="">
                    <iframe src="{{ $setting->contact_map }}" width="600" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="mt-4">
                        <p class="">
                            <strong>Address:</strong> {{ $setting->contact_address }}
                        </p>
                        <p class="">
                            <strong>Phone:</strong> {{ $setting->contact_phone }}
                        </p>
                        <p class="">
                            <strong>Mail:</strong> {{ $setting->contact_mail }}
                        </p>
                    </div>
                </div>
                <div class="rounded-lg bg-white p-8 shadow-lg">
                    <form>
                        <div class="mb-[22px]">
                            <label for="fullName" class="mb-4 block text-sm">Full
                                Name*</label>
                            <input type="text" name="fullName" placeholder="Enter your full name"
                                class="input-box" />
                        </div>
                        <div class="mb-[22px]">
                            <label for="email" class="mb-4 block text-sm">Email*</label>
                            <input type="email" name="email" placeholder="example@yourmail.com" class="input-box" />
                        </div>
                        <div class="mb-[22px]">
                            <label for="phone" class="mb-4 block text-sm">Phone*</label>
                            <input type="text" name="phone" placeholder="+66 1254 5211 552" class="input-box" />
                        </div>
                        <div class="mb-[30px]">
                            <label for="message" class="mb-4 block text-sm">Message*</label>
                            <textarea name="message" rows="1" placeholder="type your message here" class="input-box"></textarea>
                        </div>
                        <div class="mb-0">
                            <button type="submit" class="btn-primary">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
