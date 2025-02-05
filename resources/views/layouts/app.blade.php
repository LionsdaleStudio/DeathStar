<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DeathStar Laravel tutorial</title>

    @vite(['resources/sass/app.scss']);
</head>

<body>
    <h1 class="text-success">Welcome to the Deathstar. The safest place in the galaxy!</h1>
    <h2>I swear!</h2>
    <h3>Really.</h3>
    <h4>Nobody wants to blow us up.</h4>
    <h5>There are no security risks.</h5>
    @yield('yoda')
    {{-- Navbar helye --}}


    <main class="container mt-5 pt-5">
        @yield('content')
    </main>

</body>

</html>
