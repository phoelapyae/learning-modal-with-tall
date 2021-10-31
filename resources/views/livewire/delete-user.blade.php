<form id="delete-user-form">
    @csrf

    <p>
        <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="$set('showModal', true)">Yes, Delete</x-button>
    </p>

    <!-- Modal  -->
    <x-confirmation-modal wire:model.defer="showModal">
        <x-slot name="title">
            <h3>Are you sure?</h3>
        </x-slot>

        <x-slot name="body">
            <p>If you preceed, your account will be deleted entirely.</p>
        </x-slot>

        <x-slot name="footer">
            <x-button class="bg-gray-400 hover:gray-500" wire:click="$set('showModal', false)">Cancel</x-button>
            <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="handle">Continue</x-button>
        </x-slot>
    </x-confirmation-modal>
</form>