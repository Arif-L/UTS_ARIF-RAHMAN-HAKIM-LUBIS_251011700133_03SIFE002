<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body class="min-h-screen flex flex-col bg-center bg-no-repeat @yield('bg-color')" style="@yield('background')" >
    <header>
        @include('partials.nav')
    </header>

    <div class="flex flex-1 flex-col">
        <main class="flex-1">
            @yield('content')
        </main>

        <footer>
            @include('partials.footer')
        </footer>
    </div>
</body>
</html>