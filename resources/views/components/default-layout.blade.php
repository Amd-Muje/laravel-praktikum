@props(["title", "section_title" => "Menu"])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css">
    <title>{{$title}}</title>
</head>

<body class="bg-zinc-100">
    <main x-data="{ open: false }">
        <header
            class="flex items-center justify-between sm:justify-start gap-8 bg-white border-b border-zinc-300 sticky top-0 px-3 sm:px-4 py-4">
            <h2 class="class=text-xl sm:text-xl font-bold">Student Management</h2>

            <ul class="hidden sm:flex">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="{{ request()->is('dashboard') ? 'text-black' : 'text-zinc-500' }}
                    block px-2 py-1 rounded font-semibold hover:text-black text-sm">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('students.index') }}"
                        class="{{ request()->is('students') ? 'text-black' : 'text-zinc-500' }}
                    block px-2 py-1 rounded font-semibold hover:text-black text-sm">
                        Students
                    </a>
                </li>
                <li>
                    <a href="{{ route('majors.index') }}"
                        class="{{ request()->is('majors') ? 'text-black' : 'text-zinc-500' }}
                    block px-2 py-1 rounded font-semibold hover:text-black text-sm">
                        Majors
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.index') }}"
                        class="{{ request()->is('profile') ? 'text-black' : 'text-zinc-500' }}
                    block px-2 py-1 rounded font-semibold hover:text-black text-sm">
                        Profile
                    </a>
                </li>
            </ul>

            <!-- hamburger menu -->
            <button @click="open = !open" class="block sm:hidden bg-slate-50 border border-slate-400 p-2">
                <i class="ph ph-list block text-slate-400"></i>
            </button>

            <!-- mobile navigation -->
            <div x-show="open"
                class="bg-white border border-zinc-300 shadow-lg sm:hidden absolute top-12 right-3 z-50 w-48 flex flex-col gap-2 p-2">
                <a href="{{ route('dashboard') }}"
                    class="block px-4 py-2 rounded font-semibold text-sm hover:bg-gray-100">Dashboard</a>
                <a href="{{ route('students.index') }}"
                    class="block px-4 py-2 rounded font-semibold text-sm hover:bg-gray-100">Students</a>
                <a @click="open = !open"
                    href="{{ route('students.index') }}"
                    class="block px-4 py-2 rounded font-semibold text-sm hover:bg-gray-100">Majors</a>
                <a @click="open = !open"
                    href="{{ route('profile.index') }}"
                    class="block px-4 py-2 rounded font-semibold text-sm hover:bg-gray-100">Profile</a>
            </div>
        </header>

        <section class="px-3 sm:px-8 py-4 flex flex-col gap-6">
            <h3 class="text-3xl font-bold">{{ $section_title }}</h3>
            {{ $slot }}
        </section>
    </main>
</body>
</html>