<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black text-white">
    

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-white/10">
            <div>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
                </a>
            </div>
            <div class="space-x-6 font-bold ">
                <x-tag href="#" innerHtml="Careers" />
                <x-tag href="#" innerHtml="Salaries" />
                <x-tag href="#" innerHtml="Companies" />
            </div>

            @auth
                <div><a href="/jobs/create">Post a job</a></div>

                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button>Log out</button>
                </form>
            @endauth

            @guest
                <div>
                    <a href="/login">Log In</a>
                </div>
                <div>
                    <a href="/register">Sign Up</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] grid mx-auto">
            {{ $slot }}
        </main>
    </div>
    
</body>
</html>