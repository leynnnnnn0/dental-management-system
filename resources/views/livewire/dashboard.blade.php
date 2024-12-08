<div class="flex flex-col gap-2 h-full">
    <section class="grid grid-cols-4 gap-3">
        <x-stats-box icon="bi-card-checklist" title="Approved Appointments" value="{{$approvedAppointments}}" />
        <x-stats-box icon="bi-hourglass" title="Pending Appointments" value="{{$pendingAppointments}}" />
        <x-stats-box icon="bi-person-bounding-box" title="Patients" value="{{$patients}}" />
        <x-stats-box icon="bi-person-check" title="Dentists" value="{{$dentists}}" />
    </section>
    <section class="flex-1 grid grid-cols-2">
        <div>
            <h2>Appointment Status</h2>
            <livewire:livewire-pie-chart
                :pie-chart-model="$appointmentStatusChart" />
        </div>


        <div>
            <h2>Dentist Workload</h2>
            <livewire:livewire-pie-chart
                :pie-chart-model="$dentistWorkloadChart" />
        </div>
    </section>
</div>