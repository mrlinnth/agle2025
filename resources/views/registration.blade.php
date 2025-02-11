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
                        <dt class="font-medium">Institution</dt>
                        <dd class="md:col-span-2">{{ $registration->institution }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Email</dt>
                        <dd class="md:col-span-2">{{ $registration->email }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Contact</dt>
                        <dd class="md:col-span-2">{{ $registration->phone }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Role</dt>
                        <dd class="md:col-span-2">
                            {{ $registration->role }}
                        </dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Number of People</dt>
                        <dd class="md:col-span-2">{{ $registration->pax }}</dd>
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
