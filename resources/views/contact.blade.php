<x-layout>
    <x-breadcrumb>
        Contact
    </x-breadcrumb>

    <section class="py-20 bg-gray-1">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.969915440519!2d100.6117694748101!3d14.078953289635724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e27f8bf182c5cf%3A0xa51b43c33d385a98!2sAIT%20Conference%20Center!5e0!3m2!1sen!2sth!4v1738552185407!5m2!1sen!2sth"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="mt-4">
                        <p class="">
                            <strong>Address:</strong> 58 หมู่​9 Phahonyothin Rd, Khlong Nueng, Khlong Luang District,
                            Pathum Thani 12120
                        </p>
                        <p class="">
                            <strong>Phone:</strong> 1234567890
                        </p>
                        <p class="">
                            <strong>Mail:</strong> contact@mail.com
                        </p>
                    </div>
                </div>
                <div class="rounded-lg bg-white p-8 shadow-lg">
                    <form>
                        <div class="mb-[22px]">
                            <label for="fullName" class="mb-4 block text-sm">Full
                                Name*</label>
                            <input type="text" name="fullName" placeholder="Adam Gelius" class="input-box" />
                        </div>
                        <div class="mb-[22px]">
                            <label for="email" class="mb-4 block text-sm">Email*</label>
                            <input type="email" name="email" placeholder="example@yourmail.com" class="input-box" />
                        </div>
                        <div class="mb-[22px]">
                            <label for="phone" class="mb-4 block text-sm">Phone*</label>
                            <input type="text" name="phone" placeholder="+885 1254 5211 552" class="input-box" />
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
