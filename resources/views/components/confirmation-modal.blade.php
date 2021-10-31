<div{{ $attributes }} x-data="{ show: @entangle($attributes->wire('model'))}" x-show="show" @keydown.escape.window="show = false" style="display: none;">
    <div class="fixed inset-0 bg-gray-900 opacity-90" @click="show = false"></div>
    <div class="bg-white shadow-md p-4 max-w-sm h-48 m-auto rounded-md fixed inset-0" x-whow.transitio="show">
        <div class="flex flex-col h-full justify-between">
            <header class="font-bold text-lg">
                {{ $title }}
            </header>

            <main class="mb-3">
                {{ $body }}
            </main>

            <footer>
                {{ $footer }}
            </footer>
        </div>
    </div>
    </div>