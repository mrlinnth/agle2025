<x-layout>
    <x-breadcrumb>
        Abstract Submission
    </x-breadcrumb>

    <section class="py-20 bg-gray-1">
        <div class="container">
            <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
                <h2 class="mb-3 text-3xl font-bold sm:text-4xl md:text-[40px] md:leading-[1.2]">
                    Your Abstract Submission is {{ $submission->status }}
                </h2>
            </div>
            <div class="flow-root">
                <dl class="-my-3 divide-y divide-gray-100 text-sm">
                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Name</dt>
                        <dd class="md:col-span-2">{{ $submission->name }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Email</dt>
                        <dd class="md:col-span-2">{{ $submission->country }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Position</dt>
                        <dd class="md:col-span-2">{{ $submission->position }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Institution</dt>
                        <dd class="md:col-span-2">{{ $submission->institution }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Country</dt>
                        <dd class="md:col-span-2">{{ $submission->country }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">First Author</dt>
                        <dd class="md:col-span-2">{{ $submission->first_author }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Corresponding Author</dt>
                        <dd class="md:col-span-2">{{ $submission->corresponding_author }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Other Authors</dt>
                        <dd class="md:col-span-2">{{ $submission->other_author }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Paper Title</dt>
                        <dd class="md:col-span-2">{{ $submission->paper_title }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Presentation Type</dt>
                        <dd class="md:col-span-2">{{ implode(', ', $submission->presentation_options) }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 py-3 md:grid-cols-3 md:gap-4">
                        <dt class="font-medium">Uploaded Abstract File</dt>
                        <dd class="md:col-span-2">
                            <a href="{{ $file }}" target="_blank" class="btn-primary">View</a>
                        </dd>
                    </div>
                </dl>
            </div>

        </div>
    </section>
</x-layout>
