<x-layouts.create title="Schedule"
    :cancelLocation="route('schedules.index')"
    wire:click="submit"
    confirmationMessage="Are you sure you want to create this schedule?">
    <x-form.input label="From"
        name="form.from"
        model="form.from"
        type="time" />

    <x-form.input label="To"
        name="form.to"
        model="form.to"
        type="time" />

</x-layouts.create>