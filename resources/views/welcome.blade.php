<x-layout>
    <div class="container mx-w-lg mx-auto bg-gray-300">
        <header class="bg-blue-600 p-4">
            <h1 class="font-bold text-white">My Site</h1>
        </header>
        <div class="grid grid-cols-12 p-4">
            <aside class="mr-6 col-span-3 text-sm">
                <ul>
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                </ul>
            </aside>
            <main class="text-sm col-span-9">
                <div class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque mollitia odio temporibus at expedita deserunt labore natus inventore harum? Neque!
                </div>
                <div class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque mollitia odio temporibus at expedita deserunt labore natus inventore harum? Neque!
                </div>
                <div class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque mollitia odio temporibus at expedita deserunt labore natus inventore harum? Neque!
                </div>
            </main>
        </div>
        <footer class="bg-blue-600 p-4">
            This is the footer
        </footer>
    </div>

    <!-- Modal  -->
    <x-confirmation-modal>
        <x-slot name="title">
            <h3>Are you sure?</h3>
        </x-slot>

        <x-slot name="body">
            <p>If you preceed, your account will be deleted entirely.</p>
        </x-slot>

        <x-slot name="footer">
            <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button>
            <x-button class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
        </x-slot>
    </x-confirmation-modal>
</x-layout>