<div class="flex flex-col gap-2 h-full">
    <section class="grid grid-cols-4 gap-3">
        <x-stats-box icon="bi-card-checklist" title="Approved Appointments" value="0" />
        <x-stats-box icon="bi-hourglass" title="Pending Appointments" value="0" />
        <x-stats-box icon="bi-person-bounding-box" title="Patients" value="0" />
        <x-stats-box icon="bi-person-check" title="Dentists" value="0" />
    </section>
    <section class="flex-1 grid grid-cols-2">
        <livewire:livewire-column-chart
            :column-chart-model="$columnChartModel" />
        <livewire:livewire-pie-chart :pie-chart-model="$pieChartModel" />
    </section>
</div>