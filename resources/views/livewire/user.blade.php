<div class="space-y-5">
    <x-index-header heading="Users" buttonName="Create New User" location="/users/create" />
    <x-table.table>
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
                    <i class="bi bi-eye text-lg"></i>
                    <i class="bi bi-pen text-blue-500 text-lg"></i>
                    <i class="bi bi-trash text-red-500 text-lg"></i>
                </div>

            </x-table.td>
        </tr>
        @endforeach
    </x-table.table>
</div>