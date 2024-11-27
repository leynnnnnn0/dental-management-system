<x-layouts.create title="Patient"
    :cancelLocation="route('patients.index')"
    wire:click="submit"
    confirmationMessage="Are you sure you want to create this patient?">
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

    <x-form.input label="Contact Number"
        name="form.email"
        model="form.email"
        type="email" />

</x-layouts.create>