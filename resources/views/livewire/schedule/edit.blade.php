<x-layouts.edit title="Schedule"
    :cancelLocation="route('dentists.index')"
    wire:click="submit"
    confirmationMessage="Are you sure you want to edit this schedule?">
    <x-form.input label="Timeslot"
        name="form.timeslot"
        model="form.timeslot" />

</x-layouts.edit>