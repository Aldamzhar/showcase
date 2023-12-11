<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolex Watches</title>
    <!-- Link to your stylesheet -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@include('partials.header')

<main class="py-4">
    @yield('content')
</main>

@include('partials.footer')

</body>
</html>
