<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    @vite('resources/css/app.css')
    @vite('resources/css/app.js')
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body>
   <header class="bg-white border-b border-slate-100 fixed top-0 left-0 w-full z-50">
        <x-container>
            <nav class="flex justify-between items-center h-16">
                <a href="/" class="text-3xl font-medium hover:text-primary" >
                    Laragigs
                </a>

                <ul class="flex space-x-6 items-center">
                    @auth
                    <!-- Authenticated user links -->
                    <li>
                        <span>Welcome {{auth()->user()->name }}</span>
                    </li>

                    <li>
                        <form class="inline" method='POST' action="/logout">
                            @csrf
                            <x-button type="submit">Logout</x-button>
                        </form>

                    </li>

                    @else
                    <!-- Guest links -->
                    <li>
                        <x-link href="/register">Register</x-link>
                    </li>
                    <li>
                        <x-button class="bg-primary rounded-md" href="/login">Login</x-button>
                    </li>
                    @endauth

                </ul>
            </nav>
        </x-container>
    </header>


    <x-flash-message />

    <main class="mt-16">
        <!-- View Output  -->
        {{-- @yield('content') --}}
        {{ $slot }}
    </main>

    <footer class="w-full flex items-center justify-start font-bold bg-black text-white text-current h-24">
        <x-container>
            <div class="flex items-center justify-between">
                <p class="">Copyright &copy; {{date("Y")}}; All Rights reserved.</p>
                <x-button href="/listings/create" class="bg-primary rounded-md text-white py-2 px-5">Post a Job</x-button>
            </div>
        </x-container>
    </footer>
</body>
</html>