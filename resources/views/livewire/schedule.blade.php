<div class="space-y-5">
    <x-index-header heading="Schedules" buttonName="Create New Schedule" location="/schedules/create" />
    <x-table.table>
        <x-table.tr>
            <x-table.th>Id</x-table.th>
            <x-table.th>Timeslot</x-table.th>
            <x-table.th>Actions</x-table.th>
        </x-table.tr>
        @foreach ($schedules as $schedule)
        <tr class="border-b border-gray-300">
            <x-table.td>{{$schedule->id}}</x-table.td>
            <x-table.td>{{$schedule->timeslot}}</x-table.td>
            <x-table.td>
                <div class="flex items-center gap-3">
                    <x-modal.infolist-modal message="Are you sure you want to update the schedule details?">
                        <section class="grid grid-cols-2 gap-3">
                            <x-infolist label="Id" :value="$schedule->id" />
                            <x-infolist label="Timeslot" :value="$schedule->timeslot" />
                        </section>
                    </x-modal.infolist-modal>
                    <a href="/schedules/edit/{{ $schedule->id }}">
                        <i class="bi bi-pen text-blue-500 text-lg"></i>
                    </a>
                    <x-modal.delete-modal message="Are you sure you want to delete this schedule?" wire:click="delete({{$schedule->id}})" />
                </div>
            </x-table.td>
        </tr>
        @endforeach
    </x-table.table>
    <x-form.no-data :data="$schedules" />
    <div>
        {{ $schedules->links()}}
    </div>

</div>