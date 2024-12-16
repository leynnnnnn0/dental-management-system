<div class="p-5 rounded-lg shadow-lg w-[700px] flex flex-col gap-3">
    <h1 class="font-bold text-2xl mb-3">
        Signup
    </h1>

    <section class="grid grid-cols-2 gap-3">
        <x-form.input label="First Name"
            name="form.first_name"
            model="form.first_name" />

        <x-form.input label="Middle Name"
            name="form.middle_name"
            model="form.middle_name"
            :isRequired="false" />

        <x-form.input label="Last Name"
            name="form.last_name"
            model="form.last_name" />

        <x-form.input label="Contact Number"
            name="form.contact_number"
            model="form.contact_number"
            type="number" />

        <x-form.input label="Email"
            name="form.email"
            model="form.email"
            type="email" />

        <x-form.input label="Password"
            name="form.password"
            model="form.password"
            type="password" />
    </section>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/login" wire:navigate>
            {{ __('Already have an account?') }}
        </a>

        <x-primary-button class="ms-3" wire:click="submit">
            {{ __('Signup') }}
        </x-primary-button>
    </div>
</div>