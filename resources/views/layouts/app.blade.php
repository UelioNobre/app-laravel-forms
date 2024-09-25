<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto">

        <!-- title -->
        @yield('content-title')

        <!-- Inclui o componente de navegação -->
        <x-package-navitation />
        <!-- Área de conteúdo dinâmica -->
        <main class="my-8">
            @yield('content')
        </main>
    </div>
</body>

</html>
