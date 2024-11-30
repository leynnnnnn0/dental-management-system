<x-layouts.edit title="Medical History"
    :cancelLocation="route('medical-histories.index')"
    wire:click="submit"
    confirmationMessage="Are you sure you want to edit this medical history?">
    <x-form.select label="Patient"
        name="form.patient_id"
        model="form.patient_id"
        :options="$patients" />

    <x-form.select label="Dentist"
        name="form.dentist_id"
        model="form.dentist_id"
        :options="$dentists" />

    <x-form.input label="Concern"
        name="form.concern"
        model="form.concern" />

    <x-form.input label="Treatment"
        name="form.treatment"
        model="form.treatment" />

    <x-form.input label="Remarks"
        name="form.remarks"
        model="form.remarks"
        :isRequired="false" />

</x-layouts.edit>