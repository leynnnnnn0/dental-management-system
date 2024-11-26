<x-layouts.create title="User" :cancelLocation="route('users.index')" wire:click="submit">
    <x-form.input label="Name"
        name="form.name"
        model="form.name" />
    <x-form.input label="Email"
        name="form.email"
        model="form.email"
        type="email" />
    <x-form.input label="Passsword"
        name="form.email"
        model="form.password"
        type="password" />
</x-layouts.create>