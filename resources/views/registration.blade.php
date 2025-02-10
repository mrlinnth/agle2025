<x-layout>
    <x-breadcrumb>
        Registration
    </x-breadcrumb>

    <section class="py-20 bg-gray-1">
        <div class="container">
            <div class="m-auto flex w-full flex-col items-center gap-2 text-center">
                <h2 class="text-lg">Registration Deadline</h2>
                <p id="pricing" class="text-lg font-extrabold tracking-tight">
                    August 15, 2025
                </p>
            </div>
        </div>
    </section>

    <x-pricing />

    <section class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[115px]">
        <div class="container mx-auto">
            <div class="relative overflow-hidden">
                <div class="-mx-4 flex flex-wrap items-stretch">
                    <div class="w-full px-4">
                        <div class="mx-auto max-w-[570px] text-center">
                            <h2 class="mb-2.5 text-5xl font-bold text-white md:text-[38px] md:leading-[1.44]">
                                Best Abstract Awards
                            </h2>
                            <p class="mx-auto mb-6 max-w-[515px] text-base font-bold leading-[1.5] text-white">
                                Fee waivers for early-stage researchers from the Global South
                            </p>
                            <p class="mx-auto mb-6 max-w-[515px] text-sm leading-[1.5] text-white">
                                Optional Costs:<br />
                                Two days Field Trip: $100 (including Food and transportation)<br />
                                Gala Dinner: $55 (including transportation)Detail of the conference fee
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-1">
        <div class="container">
            <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                <div class="lg:col-span-2 lg:py-12">
                    <h2 class="text-lg font-semibold">Cancellation Policy</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis numquam adipisci
                        consequatur placeat corrupti iusto doloribus ab nihil maiores aliquam vel voluptatem
                        magnam deserunt, consectetur voluptas. Ipsam vitae tempore voluptates!
                    </p>
                </div>

                <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
                    <form action="#" class="space-y-4">
                        <h2 class="text-lg font-semibold">Personal Information</h2>
                        <div>
                            <label class="sr-only" for="name">Name</label>
                            <input class="input-box" placeholder="Name" type="text" id="name" />
                        </div>
                        <div>
                            <label class="sr-only" for="institution">Institution</label>
                            <input class="input-box" placeholder="Institution" type="text" id="institution" />
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="sr-only" for="country">Country</label>
                                <input class="input-box" placeholder="Country" type="text" id="country" />
                            </div>

                            <div>
                                <label class="sr-only" for="phone">Contact</label>
                                <input class="input-box" placeholder="Contact Number" type="tel" id="phone" />
                            </div>
                        </div>

                        <h2 class="text-lg font-semibold">Payment Information</h2>
                        <div>
                            <label class="sr-only" for="name">Bank Account Holder</label>
                            <input class="input-box" placeholder="Bank Account Holder Name" type="text"
                                id="name" />
                        </div>
                        <div>
                            <label class="sr-only" for="institution">Account Number</label>
                            <input class="input-box" placeholder="Account Number" type="text" id="institution" />
                        </div>

                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <label class="sr-only" for="country">Account Type</label>
                                <input class="input-box" placeholder="Account Type" type="text" id="country" />
                            </div>

                            <div>
                                <label class="sr-only" for="phone">Swift Code</label>
                                <input class="input-box" placeholder="Swift Code" type="tel" id="phone" />
                            </div>

                            <div>
                                <label class="sr-only" for="phone">Currency</label>
                                <input class="input-box" placeholder="Currency" type="tel" id="phone" />
                            </div>
                        </div>

                        <div>
                            <label class="sr-only" for="institution">Address</label>
                            <input class="input-box" placeholder="Address" type="text" id="institution" />
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
