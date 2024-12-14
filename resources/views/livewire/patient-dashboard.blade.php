<div class="flex flex-col gap-5 max-h-[800px]">
    <section class="grid grid-cols-3 gap-3">

        <x-stats-box icon="bi-card-checklist" title="Approved Appointments" value="{{ $approvedAppointments }}" />

        <x-stats-box icon="bi-hourglass" title="Pending Appointments" value="{{ $pendingAppointments }}" />

        <x-stats-box icon="bi-person-bounding-box" title="Completed Appointments" value="{{ $completedAppointments }}" />

    </section>

    <section class="max-h-[300px] h-200 w-300">
        <livewire:calendar />
    </section>
</div>