<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Posty</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-300">
        <nav class="p-6 bg-gray-100 flex justify-between mb-3">
            <ul class="flex items-center">
                <li>
                    <a href="/home" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('posts') }}" class="p-3">Posts</a>
                </li>
            </ul>

            <ul class="flex items-center">
                @auth
                    <li>
                        <a href="/users/{{ auth()->user()->username }}/posts" class="p-3">{{ auth()->user()->username }}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="inline p-3">
                            @csrf
                            <button>Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="p-3">Register</a>
                    </li>
                @endguest
            </ul>
        </nav>
        @yield ('content')
    </body>
</html>