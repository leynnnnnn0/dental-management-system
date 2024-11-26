<x-layouts.edit title="User"
    confirmationMessage="Are you sure you want to update the user details?"
    :cancelLocation="route('users.index')"
    wire:click="submit">
    <x-form.input label="Name"
        name="form.name"
        model="form.name" />
    <x-form.input label="Email"
        name="form.email"
        model="form.email"
        type="email" />
</x-layouts.edit>