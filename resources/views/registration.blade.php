<x-layout>
    <x-breadcrumb>
        Registration
    </x-breadcrumb>

    <section class="py-20 bg-gray-1">
        <div class="container">
            <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
                <h2 class="mb-3 text-3xl font-bold sm:text-4xl md:text-[40px] md:leading-[1.2]">
                    Your Registration is {{ $registration->status }}
                </h2>
            </div>
            <div class="flow-root">
                <dl class="-my-3 divide-y divide-gray-100 text-sm">
                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Name</dt>
                        <dd class="md:col-span-2">{{ $registration->name }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Email</dt>
                        <dd class="md:col-span-2">{{ $registration->email }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Position</dt>
                        <dd class="md:col-span-2">{{ $registration->position }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Student ID</dt>
                        <dd class="md:col-span-2">{{ $registration->student_id }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Institution</dt>
                        <dd class="md:col-span-2">{{ $registration->institution }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Country</dt>
                        <dd class="md:col-span-2">{{ $registration->country }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Submit Abstract</dt>
                        <dd class="md:col-span-2">{{ $registration->has_paper ? 'Yes' : 'No' }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Authoer Type</dt>
                        <dd class="md:col-span-2">{{ $registration->author_type }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Abstract Title</dt>
                        <dd class="md:col-span-2">{{ $registration->paper_title }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Join Field Trip</dt>
                        <dd class="md:col-span-2">{{ $registration->join_trip ? 'Yes' : 'No' }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Join Gala Dinner</dt>
                        <dd class="md:col-span-2">{{ $registration->join_dinner ? 'Yes' : 'No' }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Participate in</dt>
                        <dd class="md:col-span-2">{{ $registration->participation_option }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Payment</dt>
                        <dd class="md:col-span-2">
                            <img src="{{ $file }}" alt="payment" class="w-1/2">
                        </dd>
                    </div>
                </dl>
            </div>

        </div>
    </section>
</x-layout>
