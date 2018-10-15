<html>
<head>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>{{$title}}</title>
</head>
<body>
<header>
   @include('menu')
</header>
<main class="container">
    @yield('content')
</main>

<footer class="d-flex justify-content-center">

</footer>
</body>
</html>
