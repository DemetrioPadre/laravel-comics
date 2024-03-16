<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>DC COMICS </title>
    <link rel="icon" href="{{ Vite::asset('/resources/images/favicon.ico') }}" type="image/x-icon">

    @vite('resources/js/app.js')
</head>

<body>
    <!-- header -->
    @include('partials.header')


    @yield('main-content')
    <!-- fine header -->

    <!-- jumbotron img -->

    @include('partials.jumbo')
    @yield('jumbo')

    <!-- fine jmb img -->

    <!-- footer -->
    @include('partials.footer')
    <!-- footer -->
</body>

</html>