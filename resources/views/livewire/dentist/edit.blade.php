<x-layouts.edit title="Dentists"
    :cancelLocation="route('dentists.index')"
    wire:click="submit"
    confirmationMessage="Are you sure you want to edit this dentist details?">
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

    <x-form.input label="Specialization"
        name="form.specialization"
        model="form.specialization" />

    <x-form.input label="License Number"
        name="form.license_number"
        model="form.license_number" />

    <x-form.input label="Password"
        name="form.password"
        model="form.password"
        type="password" />

</x-layouts.edit>