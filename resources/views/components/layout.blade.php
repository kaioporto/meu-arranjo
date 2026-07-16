@props([
    'title' => 'Meu Arranjo'
])

<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Tailwhind CSS Framework -->
<!--    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
</head>
<body class="bg-gray-700 text-white pt-16">
    <x-navbar/>
    <main class="max-w-xl mx-auto p-6">
        {{ $slot }}
    </main>
</body>
</html>
