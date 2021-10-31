<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Delete</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $user->name }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button wire:click="confirmDelete({{ $user->id }})" class="text-indigo-600 hover:text-indigo-900">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                        <!-- More people... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal  -->
    <x-confirmation-modal wire:model.defer="showDeleteUserModal">
        <x-slot name="title">
        </x-slot>

        <x-slot name="body">
            <p>If you preceed, your account will be deleted entirely.</p>
        </x-slot>

        <x-slot name="footer">
            <x-button class="bg-gray-400 hover:gray-500" wire:click="$set('showDeleteUserModal', false)">Cancel</x-button>
            <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="delete">Continue</x-button>
        </x-slot>
    </x-confirmation-modal>

</div>