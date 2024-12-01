<div class="space-y-5">
    <x-index-header heading="Appointments" buttonName="Create New Appointment" location="/appointments/create" />
    <x-search model="keyword" />
    <x-table.table>
        <x-table.tr>
            <x-table.th>Id</x-table.th>
            <x-table.th>Appointment Number</x-table.th>
            <x-table.th>Dentist</x-table.th>
            <x-table.th>Patient</x-table.th>
            <x-table.th>Schedule</x-table.th>
            <x-table.th>Status</x-table.th>
            <x-table.th>Actions</x-table.th>
        </x-table.tr>
        @foreach ($appointments as $appointment)
        <tr class="border-b border-gray-300">
            <x-table.td>{{$appointment->id}}</x-table.td>
            <x-table.td>{{$appointment->appointment_number}}</x-table.td>
            <x-table.td>{{$appointment->dentist->full_name}}</x-table.td>
            <x-table.td>{{$appointment->patient->full_name}}</x-table.td>
            <x-table.td>{{$appointment->schedule->timeslot}}</x-table.td>
            <x-table.td>{{$appointment->status}}</x-table.td>
            <x-table.td>
                <div class="flex items-center gap-3">
                    <x-modal.infolist-modal message="Are you sure you want to update the user details?">
                        <section class="grid grid-cols-2 gap-3">
                            <x-infolist label="Id" :value="$appointment->id" />
                            <x-infolist label="Dentist" :value="$appointment->dentist->full_name" />
                            <x-infolist label="Patient" :value="$appointment->patient->full_name" />
                            <x-infolist label="Schedule" :value="$appointment->schedule->timeslot" />
                            <x-infolist label="Concern" :value="$appointment->concern" />
                            <x-infolist label="Remarks" :value="$appointment->remarks" />
                            <x-infolist label="Status" :value="$appointment->status" />
                        </section>
                    </x-modal.infolist-modal>
                    <a href="/appointments/edit/{{ $appointment->id }}">
                        <i class="bi bi-pen text-blue-500 text-lg"></i>
                    </a>
                    <x-modal.delete-modal message="Are you sure you want to delete this appointment?" wire:click="delete({{$appointment->id}})" />
                    <span class="cursor-pointer hover:underline text-xs text-green-500">Approve</span>
                    <span class="cursor-pointer hover:underline text-xs text-red-500">Decline</span>
                </div>
            </x-table.td>
        </tr>
        @endforeach
    </x-table.table>
    <x-form.no-data :data="$appointments" />
    <div>
        {{ $appointments->links()}}
    </div>

</div>