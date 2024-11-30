<x-layouts.edit title="Schedule"
    :cancelLocation="route('dentists.index')"
    wire:click="submit"
    confirmationMessage="Are you sure you want to edit this schedule?">
    <x-form.input label="From"
        name="form.from"
        model="form.from" />

    <x-form.input label="To"
        name="form.to"
        model="form.to" />

</x-layouts.edit>