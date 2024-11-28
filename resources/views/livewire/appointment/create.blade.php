<x-layouts.create title="Appointment"
    :cancelLocation="route('appointments.index')"
    wire:click="submit"
    confirmationMessage="Are you sure you want to create this appointment?">
    <x-form.select label="Patient"
        name="form.patient_id"
        model="form.patient_id">
    </x-form.select>

    <x-form.select label="Doctor"
        name="form.dentist_id"
        model="form.dentist_id">
    </x-form.select>

    <x-form.select label="Schedule"
        name="form.shedule_id"
        model="form.schedule_id">
    </x-form.select>

    <x-form.input label="Concern"
        name="form.concern"
        model="form.concern" />

    <x-form.input label="Remarks"
        name="form.remarks"
        model="form.remarks" />

</x-layouts.create>