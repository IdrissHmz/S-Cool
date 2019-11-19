<!DOCTYPE html>
<html>
<head>
    @yield('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/style.css') }}">
    <title>
        titre
    </title>
</head>
<body>
<div class="container">
    <div class="heading">
        @yield('heading')
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</div>
</body>
</html>
