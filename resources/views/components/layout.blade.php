<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Modal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css" integrity="sha512-yXagpXH0ulYCN8G/Wl7GK+XIpdnkh5fGHM5rOzG8Kb9Is5Ua8nZWRx5/RaKypcbSHc56mQe0GBG0HQIGTmd8bw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>

<body>
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
                {{ $slot }}
            </main>
        </div>
        <footer class="bg-blue-600 p-4">
            This is the footer
        </footer>
    </div>

    @livewireScripts
</body>

</html>