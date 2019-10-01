<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body>
    <div class="container-fluid">
        <header class="row">
            @include('layouts.navbar')
        </header>
        <main class="row">
            <div class="column w-100">
                @yield('content')
            </div>
        </main>
        <footer class="row">
            @include('layouts.footer')
        </footer>
    </div>
</body>

</html>
