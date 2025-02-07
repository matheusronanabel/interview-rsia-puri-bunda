<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <main class="w-full min-h-screen bg-neutral-50 grid grid-cols-12 items-start">
        <x-partials.sidebar />
        <section class="p-16 col-span-10 grid grid-cols-4 gap-6">
            {{ $slot }}
        </section>
    </main>
    @livewireScripts
</body>

</html>
