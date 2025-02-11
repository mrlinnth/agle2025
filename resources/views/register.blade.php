<x-layout>
    <x-breadcrumb>
        Registration
    </x-breadcrumb>

    @if ($errors->any())
        <div role="alert" class="rounded-sm border-s-4 border-red-500 bg-red-50 p-4">
            <strong class="block font-medium text-red-800">Form submission error</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
            <h2 class="mb-4 text-3xl font-bold sm:text-4xl md:text-[40px] md:leading-[1.2] text-center">
                Registraiton Form
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <h2 class="mb-2 font-bold">Registration Instructions</h2>
                        <ol class="list-decimal">
                            <li>Transfer Registration Fee</li>
                            <li>Enter Personal Information</li>
                            <li>Upload Transfer Slip</li>
                            <li>Receive Confirmation (within 2-3 business days)</li>
                        </ol>
                    </div>
                    <div>
                        <h2 class="mb-2 font-bold">Transfer from Overseas</h2>
                        <p>Payment for registration fee can be transfer from overseas through the AIT Current Account
                            (A/C) details below:</p>
                        <ol class="list-disc">
                            <li>Thai Bhat Account: Siam Commercial Bank, Thammasat University Hospital Branch</li>
                            <li>Name of A/C: ASIAN INSTITUTE OF TECHNOLOGY</li>
                            <li>Current A/C # 468-046301-2</li>
                            <li>Address: 95 Moo 8, Kiong Nueng, Kiong Luang, Pathumthani 12120 Thailand</li>
                            <li>Swift Code: SICOTHBK</li>
                        </ol>
                    </div>
                    <div>
                        <h2 class="mb-2 font-bold">Transfer in Thailand</h2>
                        <p>Payment for registration fee can be transfer in Thailand through the AIT Saving Account
                            (A/C) details below:</p>
                        <ol class="list-disc">
                            <li>Thai Bhat Account: Siam Commercial Bank, Thammasat University Hospital Branch</li>
                            <li>Name of A/C: ASIAN INSTITUTE OF TECHNOLOGY</li>
                            <li>Current A/C # 405-999567-0</li>
                            <li>Address: 95 Moo 8, Kiong Nueng, Kiong Luang, Pathumthani 12120 Thailand</li>
                            <li>Swift Code: SICOTHBK</li>
                        </ol>
                    </div>
                    <div>
                        <h2 class="mb-2 font-bold">Cancellation Policy</h2>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis numquam adipisci
                            consequatur placeat corrupti iusto doloribus ab nihil maiores aliquam vel voluptatem
                            magnam deserunt, consectetur voluptas. Ipsam vitae tempore voluptates!
                        </p>
                    </div>
                </div>

                <div class="rounded-lg bg-white p-8 shadow-lg">
                    <form method="POST" action="{{ route('registrations.store') }}" enctype="multipart/form-data"
                        class="space-y-4">
                        @csrf
                        <h2 class="mb-2 font-bold">Personal Information</h2>
                        <div>
                            <label class="sr-only" for="name">Name</label>
                            <input class="input-box" placeholder="Name" type="text" name="name" id="name"
                                required />
                        </div>
                        <div>
                            <label class="sr-only" for="institution">Institution</label>
                            <input class="input-box" placeholder="Institution" type="text" name="institution"
                                id="institution" required />
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="sr-only" for="email">Email</label>
                                <input class="input-box" placeholder="Email" type="email" name="email"
                                    id="email" required />
                            </div>

                            <div>
                                <label class="sr-only" for="phone">Contact</label>
                                <input class="input-box" placeholder="Contact Number" type="text" name="phone"
                                    id="phone" required />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="sr-only" for="role">Role</label>
                                <select name="role" id="role" class="input-box" required>
                                    <option value="">Select Role</option>
                                    <option value="student">Student</option>
                                    <option value="faculty">Faculty</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label class="sr-only" for="pax">Number of people</label>
                                <input class="input-box" placeholder="Number of people" type="number" name="pax"
                                    id="pax" max="10" min="1" required />
                            </div>
                        </div>


                        <h2 class="mb-2 font-bold">Upload Transaction Detail/Payment Slip</h2>
                        <div>
                            {{-- <label
                                class="flex cursor-pointer appearance-none justify-center rounded-md border border-dashed border-gray-300 bg-white px-3 py-6 text-sm transition hover:border-gray-400 focus:border-solid focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600 disabled:cursor-not-allowed disabled:bg-gray-200 disabled:opacity-75"
                                tabindex="0">
                                <span class="flex items-center space-x-2">
                                    <svg class="h-6 w-6 stroke-gray-400" viewBox="0 0 256 256">
                                        <path d="M96,208H72A56,56,0,0,1,72,96a57.5,57.5,0,0,1,13.9,1.7" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path>
                                        <path d="M80,128a80,80,0,1,1,144,48" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="24"></path>
                                        <polyline points="118.1 161.9 152 128 185.9 161.9" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></polyline>
                                        <line x1="152" y1="208" x2="152" y2="128"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="24"></line>
                                    </svg>
                                    <span class="text-xs font-medium text-gray-600">
                                        Drop files to Attach, or
                                        <span class="text-blue-600 underline">browse</span>
                                    </span>
                                </span>
                                <input name="upload" id="upload" type="file" class="sr-only" />
                            </label> --}}
                            <input class="input-box" name="upload" id="upload" type="file" required />
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn-primary">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
