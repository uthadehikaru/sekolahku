<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    data-theme="corporate">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name' ) }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="icon" type="image/png" href="{{ asset('sekolahku.png') }}">

    <!-- DaisyUI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.6/dist/full.css" rel="stylesheet" type="text/css" />

    <!-- Tailwind CSS (required for DaisyUI) -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a>Beranda</a></li>
                    <li>
                        <a>Tentang Kami</a>
                        <ul class="p-2">
                            <li><a>Visi & Misi</a></li>
                            <li><a>Sejarah</a></li>
                        </ul>
                    </li>
                    <li><a>Hubungi Kami</a></li>
                </ul>
            </div>
            <a href="{{ url('/') }}" class="btn btn-ghost text-xl"><img src="{{ asset('sekolahku.png') }}" alt="SekolahKu" class="w-10 h-10">
        {{ config('app.name') }}</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a>Beranda</a></li>
                <li>
                    <details>
                        <summary>Tentang Kami</summary>
                        <ul class="p-2">
                            <li><a>Visi & Misi</a></li>
                            <li><a>Sejarah</a></li>
                        </ul>
                    </details>
                </li>
                <li><a>Hubungi Kami</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            @guest
                <a href="{{ route('registration') }}" class="btn btn-primary">Daftar</a>
            @endguest
            @auth
                <a href="{{ route('logout') }}" class="btn btn-secondary">Keluar</a>
            @endauth
        </div>
    </div>
    @yield('content')
    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <img src="{{ asset('sekolahku.png') }}" alt="SekolahKu" class="w-10 h-10">
                <span class="ml-3 text-xl">{{ config('app.name' ) }}</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©
                {{ date('Y') }} {{ config('app.name' ) }} —
                <a href="https://twitter.com/zuhriutama" class="text-gray-600 ml-1" rel="noopener noreferrer"
                    target="_blank">@zuhriutama</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>
</body>

</html>
