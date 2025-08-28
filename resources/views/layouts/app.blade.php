<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="drawer lg:drawer-open">
    <input id="sidebar-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col min-h-screen">
        <!-- Navbar -->
        <div class="navbar bg-base-300">
            <div class="flex-none">
                <label id="side-toggle" for="sidebar-drawer" class="btn btn-square btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block h-6 w-6 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>
            </div>
            <div class="mx-2 flex-1 px-2 font-bold text-lg"> {{ config('app.name', 'Laravel') }} </div>
            <div class="hidden flex-none lg:block">
                <ul class="menu menu-horizontal">
                    <li><a href="{{ route('profile.edit') }}">Perfil</a></li>
                </ul>
            </div>
        </div>
        <!-- Conteúdo da página -->
        <main class="p-6 flex-1">
            @yield('content')
        </main>
    </div>
    <div class="drawer-side">
        <label id="side-overlay" for="sidebar-drawer" class="drawer-overlay"></label>
        <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('profile.edit') }}">Perfil</a></li>
            <li><a href="{{ route('profile.edit') }}">Alternar Tema</a></li>
        </ul>
    </div>
    <script>
        const body = document.body
        const toggleBtn = document.getElementById('side-toggle')
        const drawerOverlay = document.getElementById('side-overlay')
        toggleBtn.addEventListener('click', function(e) {
            if (window.innerWidth >= 1024) {
                console.log('tela grande')
                e.preventDefault()
                body.classList.toggle('lg:drawer-open')
                drawerOverlay.classList.remove('drawer-overlay')
            }
            if (window.innerWidth < 1024) {
                body.classList.remove('lg:drawer-open')
                drawerOverlay.classList.add('drawer-overlay')
                console.log('tela pequena')
            }
        })
    </script>
</body>

</html>
