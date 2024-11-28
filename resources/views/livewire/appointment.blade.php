<div class="space-y-5">
    <x-index-header heading="Appointments" buttonName="Create New Appointment" location="/appointments/create" />
    <x-table.table>
        <x-table.tr>
            <x-table.th>Id</x-table.th>
            <x-table.th>Concern</x-table.th>
            <x-table.th>Remarks</x-table.th>
            <x-table.th>Status</x-table.th>
            <x-table.th>Actions</x-table.th>
        </x-table.tr>
        @foreach ($appointments as $appointment)
        <tr class="border-b border-gray-300">
            <x-table.td>{{$appointment->id}}</x-table.td>
            <x-table.td>{{$appointment->concern}}</x-table.td>
            <x-table.td>{{$appointment->remarks}}</x-table.td>
            <x-table.td>{{$appointment->status}}</x-table.td>
            <x-table.td>
                <div class="flex items-center gap-3">
                    <x-modal.infolist-modal message="Are you sure you want to update the user details?">
                        <section class="grid grid-cols-2 gap-3">
                            <x-infolist label="Id" :value="$appointment->id" />
                            <x-infolist label="Name" :value="$appointment->name" />
                            <x-infolist label="Email" :value="$appointment->email" />
                        </section>
                    </x-modal.infolist-modal>
                    <a href="/appointments/edit/{{ $appointment->id }}">
                        <i class="bi bi-pen text-blue-500 text-lg"></i>
                    </a>
                    <x-modal.delete-modal message="Are you sure you want to delete this appointment?" wire:click="delete({{$appointment->id}})" />
                </div>
            </x-table.td>
        </tr>
        @endforeach
    </x-table.table>
    <div>
        {{ $appointments->links()}}
    </div>

</div>