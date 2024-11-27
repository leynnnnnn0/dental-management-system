<div class="space-y-5">
    <x-index-header heading="Dentists" buttonName="Create New Dentist" location="/dentists/create" />
    <x-table.table>
        <x-table.tr>
            <x-table.th>Id</x-table.th>
            <x-table.th>Name</x-table.th>
            <x-table.th>Email</x-table.th>
            <x-table.th>Actions</x-table.th>
        </x-table.tr>
        @foreach ($dentists as $patient)
        <tr class="border-b border-gray-300">
            <x-table.td>{{$dentist->id}}</x-table.td>
            <x-table.td>{{$dentist->first_name}}</x-table.td>
            <x-table.td>{{$dentist->email}}</x-table.td>
            <x-table.td>
                <div class="flex items-center gap-3">
                    <x-modal.infolist-modal message="Are you sure you want to update the user details?">
                        <section class="grid grid-cols-2 gap-3">
                            <x-infolist label="Id" :value="$dentist->id" />
                            <x-infolist label="Name" :value="$dentist->name" />
                            <x-infolist label="Email" :value="$dentist->email" />
                        </section>
                    </x-modal.infolist-modal>
                    <a href="/patients/edit/{{ $dentist->id }}">
                        <i class="bi bi-pen text-blue-500 text-lg"></i>
                    </a>
                    <x-modal.delete-modal message="Are you sure you want to delete this user?" wire:click="delete({{$dentist->id}})" />
                </div>
            </x-table.td>
        </tr>
        @endforeach
    </x-table.table>
    <div>
        {{ $dentists->links()}}
    </div>

</div>