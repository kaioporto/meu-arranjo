@props([
    'title' => 'Meu Arranjo'
])

<!DOCTYPE html>
<html data-theme="autumn" lang="br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="min-h-screen flex flex-col">
    <x-navbar/>
    <main class="max-w-xl mx-auto p-6 flex-1">
        {{ $slot }}
    </main>
</body>
</html>
