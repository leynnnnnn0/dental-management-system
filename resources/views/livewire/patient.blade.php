<div class="space-y-5">
    <x-index-header heading="Patients" buttonName="Create New Patient" location="/patients/create" />
    <x-table.table>
        <x-table.tr>
            <x-table.th>Id</x-table.th>
            <x-table.th>Name</x-table.th>
            <x-table.th>Email</x-table.th>
            <x-table.th>Actions</x-table.th>
        </x-table.tr>
        @foreach ($patients as $patient)
        <tr class="border-b border-gray-300">
            <x-table.td>{{$patient->id}}</x-table.td>
            <x-table.td>{{$patient->first_name}}</x-table.td>
            <x-table.td>{{$patient->email}}</x-table.td>
            <x-table.td>
                <div class="flex items-center gap-3">
                    <x-modal.infolist-modal message="Are you sure you want to update the user details?">
                        <section class="grid grid-cols-2 gap-3">
                            <x-infolist label="Id" :value="$patient->id" />
                            <x-infolist label="Name" :value="$patient->name" />
                            <x-infolist label="Email" :value="$patient->email" />
                        </section>
                    </x-modal.infolist-modal>
                    <a href="/patients/edit/{{ $patient->id }}">
                        <i class="bi bi-pen text-blue-500 text-lg"></i>
                    </a>
                    <x-modal.delete-modal message="Are you sure you want to delete this user?" wire:click="delete({{$patient->id}})" />
                </div>
            </x-table.td>
        </tr>
        @endforeach
    </x-table.table>
    <div>
        {{ $patients->links()}}
    </div>

</div>