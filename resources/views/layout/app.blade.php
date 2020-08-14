<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
<header>

</header>

<main>
    {{ !empty(session('status')) ? session('status') : '' }}
    @yield('content')
</main>
<footer>
    {{--@include('elems.footer')--}}
</footer>
</body>
</html>
