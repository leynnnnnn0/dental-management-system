@props(['title', 'cancelLocation', 'confirmationMessage'])
<div>
    <x-plain-heading class="mb-3">Create New {{ $title }}</x-plain-heading>
    <div class="bg-white rounded-xl p-3 dark:bg-secondary-dark">
        <section class="pb-3 border-b border-gray-300">
            <h1 class="text-gray-700 font-bold text-lg dark:text-white">{{ $title }} Information</h1>
            <p class="text-gray-600 text-xs dark:text-white">Please input all the required fields.</p>
        </section>
        <section class="py-2 grid grid-cols-2 gap-3">
            {{ $slot }}
        </section>
        <section class="flex justify-end gap-3">
            <a href="{{ $cancelLocation }}" class="px-4 py-1 border border-gray-500 rounded-lg text-black hover:bg-opacity-75 transition-colors duration-300 dark:text-white dark:border-white" wire:navigate.hover>Cancel</a>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmation">
                Submit
            </button>
        </section>
    </div>

    <div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="confirmation-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ $confirmationMessage }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button {{ $attributes}} type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>