<div class="space-y-5">
    <x-index-header heading="Users" buttonName="Create New User" location="/admin/users/create" />
    <x-table.table>
        <input class="rounded-lg w-[300px]" type="text" placeholder="Search..." wire:model.live="keyword" />
        <x-table.tr>
            <x-table.th>Id</x-table.th>
            <x-table.th>Name</x-table.th>
            <x-table.th>Email</x-table.th>
            <x-table.th>Actions</x-table.th>
        </x-table.tr>
        @foreach ($users as $user)
        <tr class="border-b border-gray-300">
            <x-table.td>{{$user->id}}</x-table.td>
            <x-table.td>{{$user->name}}</x-table.td>
            <x-table.td>{{$user->email}}</x-table.td>
            <x-table.td>
                <div class="flex items-center gap-3">
                    <x-modal.infolist-modal message="Are you sure you want to update the user details?">
                        <section class="grid grid-cols-2 gap-3">
                            <x-infolist label="Id" :value="$user->id" />
                            <x-infolist label="Name" :value="$user->name" />
                            <x-infolist label="Email" :value="$user->email" />
                        </section>
                    </x-modal.infolist-modal>
                    <a href="/admin/users/edit/{{ $user->id }}">
                        <i class="bi bi-pen text-blue-500 text-lg"></i>
                    </a>
                    <x-modal.delete-modal message="Are you sure you want to delete this user?" wire:click="delete({{$user->id}})" />
                </div>
            </x-table.td>
        </tr>
        @endforeach
    </x-table.table>
    <x-form.no-data :data="$users" />
    <div>
        {{ $users->links()}}
    </div>

</div>