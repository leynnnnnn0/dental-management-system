<div class="space-y-5">
    <x-index-header heading="Medical Histories" buttonName="Create New Medical History" location="/medical-histories/create" />
    <x-table.table>
        <x-table.tr>
            <x-table.th>Id</x-table.th>
            <x-table.th>Dentist</x-table.th>
            <x-table.th>Patient</x-table.th>
            <x-table.th>Concern</x-table.th>
            <x-table.th>Treatment</x-table.th>
            <x-table.th>Actions</x-table.th>
        </x-table.tr>
        @foreach ($medicalHistories as $medicalHistory)
        <tr class="border-b border-gray-300">
            <x-table.td>{{$medicalHistory->id}}</x-table.td>
            <x-table.td>{{$medicalHistory->dentist->full_name}}</x-table.td>
            <x-table.td>{{$medicalHistory->patient->full_name}}</x-table.td>
            <x-table.td>{{$medicalHistory->concern}}</x-table.td>
            <x-table.td>{{$medicalHistory->treatment}}</x-table.td>
            <x-table.td>
                <div class="flex items-center gap-3">
                    <x-modal.infolist-modal message="Are you sure you want to update the user details?">
                        <section class="grid grid-cols-2 gap-3">
                            <x-infolist label="Id" :value="$medicalHistory->id" />
                            <x-infolist label="Dentist" :value="$medicalHistory->dentist->full_name" />
                            <x-infolist label="Patient" :value="$medicalHistory->patient->full_name" />
                            <x-infolist label="Concern" :value="$medicalHistory->concern" />
                            <x-infolist label="Remarks" :value="$medicalHistory->remarks" />
                        </section>
                    </x-modal.infolist-modal>
                    <a href="/medical-histories/edit/{{ $medicalHistory->id }}">
                        <i class="bi bi-pen text-blue-500 text-lg"></i>
                    </a>
                    <x-modal.delete-modal message="Are you sure you want to delete this medical history?" wire:click="delete({{$medicalHistory->id}})" />
                </div>
            </x-table.td>
        </tr>
        @endforeach
    </x-table.table>
    <x-form.no-data :data="$medicalHistories" />
    <div>
        {{ $medicalHistories->links()}}
    </div>

</div>