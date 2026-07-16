@props([])
<nav class="fixed top-0 left-0 bg-gray-800 border-b border-gray-700 w-full z-50">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="/" class="text-xl font-bold text-white whitespace-nowrap">
                Meu Arranjo
            </a>
            <div class="hidden md:flex items-center space-x-4">
                <a href="/" class="text-gray-300 hover:text-white transition-colors">Home</a>
                <a href="/musics" class="text-gray-3000 hover:text-white transition-colors">Músicas</a>
                @guest
                    <a href="/login" class="text-gray-300 hover:text-white transition-colors">Login</a>
                @endguest
                @auth
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-300 hover:text-white focus:outline-none cursor-pointer">
                            Sair
                        </button>
                    </form>
                @endauth
            </div>

            <button id="navbar-toggle" class="md:hidden text-gray-300 hover:text-white focus:outline-none cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <div id="navbar-menu" class="hidden md:hidden bg-gray-800 border-t border-gray-700">
        <div class="px-2 py-3 space-y-1">
            <a href="/" class="block px-3 py-2 text-gray-300 hover:text-white transition-colors">Home</a>
            <a href="/musics" class="block px-3 py-2 text-gray-300 hover:text-white transition-colors">Músicas</a>
            @guest
                <a href="/login" class="block px-3 py-2 text-gray-300 hover:text-white transition-colors">Login</a>
            @endguest
            @auth
                <form method="POST" action="/logout" class="inline">
                    @csrf
                    <button type="submit" class="text-gray-300 hover:text-white focus:outline-none cursor-pointer">
                        Sair
                    </button>
                </form>
            @endauth
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toggle = document.getElementById('navbar-toggle');
        var menu = document.getElementById('navbar-menu');
        if (toggle && menu){
            toggle.addEventListener('click', function () {
                menu.classList.toggle('hidden');
            });
        }
    });
</script>