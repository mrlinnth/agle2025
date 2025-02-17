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
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-2 text-center">
                <div>
                    <h2 class="text-lg">Registration Deadline</h2>
                    <p class="text-lg font-extrabold text-primary">
                        September 7, 2025 (Sunday)
                    </p>
                </div>
                <div>
                    <h2 class="text-lg">Early Bird Registration Deadline</h2>
                    <p class="text-lg font-extrabold text-primary">
                        June 30, 2025 (Monday)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-1">
        <div class="container">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-4">
                    <h2 class="mb-4 text-3xl font-bold">
                        Payment Instructions
                    </h2>
                    <div>
                        <h2 class="mb-2 font-bold">Transfer from Overseas</h2>
                        <p>Payment for registration fee can be transfer from overseas through the AIT Current Account
                            (A/C) details below:</p>
                        <ol class="ml-4 list-disc">
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
                        <ol class="ml-4 list-disc">
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
                        class="space-y-6">
                        @csrf
                        <h2 class="mb-2 font-bold">Registration Form</h2>
                        <div>
                            <label class="text-sm text-dark-3" for="name">Full Name*</label>
                            <input class="input-box" placeholder="Name" type="text" name="name" id="name"
                                required />
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="email">Email*</label>
                            <input class="input-box" placeholder="Email" type="email" name="email" id="email"
                                required />
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="position">Position*</label>
                            <select class="input-box" name="position" id="position">
                                @foreach ($positions as $position)
                                    <option value="{{ $position }}">{{ $position }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="student_id">If you are a student, please enter your
                                Student
                                ID</label>
                            <input class="input-box" placeholder="Student ID" type="text" name="student_id"
                                id="student_id" />
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="institution">Affiliation/Institution*</label>
                            <input class="input-box" placeholder="Institution" type="text" name="institution"
                                id="institution" required />
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="country">Country*</label>
                            <select class="input-box" name="country" id="country">
                                @foreach ($countries as $country)
                                    <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <h2 class="mb-2 font-bold">Abstract Paper Information</h2>
                        <div>
                            <p class="text-sm text-dark-3">Will you submit the paper?*</p>
                            <div>
                                <input type="radio" id="paper_yes" name="has_paper" value="1" required />
                                <label for="paper_yes">Yes</label>
                            </div>

                            <div>
                                <input type="radio" id="paper_no" name="has_paper" value="0" required />
                                <label for="paper_no">No</label>
                            </div>
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="author_type">Type of Author</label>
                            <select class="input-box" name="author_type" id="author_type">
                                @foreach ($authorTypes as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="text-sm text-dark-3" for="paper_title">Title of Abstract</label>
                            <input class="input-box" placeholder="Abstract Title" type="text" name="paper_title"
                                id="paper_title" />
                        </div>

                        <h2 class="mb-2 font-bold">Field Trip Information</h2>
                        <div class="text-xs text-dark-3">
                            <p class=""><strong>Day</strong>: 7-8 November 2025</p>
                            <p class=""><strong>Location</strong>: Saraburi, Lopburi and
                                Kanchanaburi
                                provinces</p>
                            <p class=""><strong>Cost</strong>: 50 USD per day [including lunch and
                                transportation]</p>
                        </div>
                        <div>
                            <p class="text-sm text-dark-3">Will you participate in the field trip?*</p>
                            <div>
                                <input type="radio" id="trip_yes" name="join_trip" value="1" required />
                                <label for="trip_yes">Yes</label>
                            </div>
                            <div>
                                <input type="radio" id="trip_no" name="join_trip" value="0" required />
                                <label for="trip_no">No</label>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm text-dark-3">Will you be joining the Gala Dinner (Chao Phraya Cruise
                                Dinner) on 05 November 2025?*</p>
                            <div>
                                <input type="radio" id="dinner_yes" name="join_dinner" value="1" required />
                                <label for="dinner_yes">Yes</label>
                            </div>
                            <div>
                                <input type="radio" id="dinner_no" name="join_dinner" value="0" required />
                                <label for="dinner_no">No</label>
                            </div>
                        </div>

                        <h2 class="mb-2 font-bold">Payment Information</h2>
                        <div class="flex flex-col space-y-2 text-xs text-dark-3">
                            <p class="">
                                <strong>1 - Conference</strong>
                            </p>
                            <ul class="ml-8  list-disc">
                                <li>Regular registration Fee : USD 400, (Researchers from the Global South: USD 350.
                                    Students: USD 250, Students from Global South: USD 170)</li>
                                <li>Early Bird registration (by June 30, 2025) : USD 300, (Researchers from the Global
                                    South: USD 250. Students: USD 200, Students from Global South: USD 150)</li>
                            </ul>
                            <p class=""><strong>2 - Field Trip</strong>: USD 50 for one day and USD 100
                                for two days</p>
                            <p class=""><strong>3 - Gala Dinner</strong>: USD 55 (including
                                transportation from AIT)</p>
                        </div>
                        <div>
                            <p class="text-sm text-dark-3">How will you participate the event?*</p>
                            <div>
                                <input type="radio" id="po_1" name="participation_option"
                                    value="Conference Only" required />
                                <label for="po_1">Conference Only</label>
                            </div>
                            <div>
                                <input type="radio" id="po_2" name="participation_option"
                                    value="Conference + Tow Days Field Trip" required />
                                <label for="po_2">Conference + Tow Days Field Trip</label>
                            </div>
                            <div>
                                <input type="radio" id="po_3" name="participation_option"
                                    value="Conference + Gala Dinner" required />
                                <label for="po_3">Conference + Gala Dinner</label>
                            </div>
                            <div>
                                <input type="radio" id="po_4" name="participation_option"
                                    value="Conference + Tow Days Field Trip + Gala Dinner" required />
                                <label for="po_4">Conference + Tow Days Field Trip + Gala Dinner</label>
                            </div>
                        </div>
                        <div>
                            <label class="text-sm text-dark-3">Please upload the total payment receipt. Max 2MB. Allow
                                file type: pdf/jpg/png.*</label>
                            <input class="input-box" name="upload" id="upload" type="file" required />
                        </div>

                        <div class="mt-4">
                            {!! RecaptchaV3::field('submit') !!}
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
