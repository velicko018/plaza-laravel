<!DOCTYPE html>
<html>
<head>
    @include('layouts.partial.head')
</head>
<body>
    @include('layouts.partial.header_navigation')

    @yield('content')

    @include('layouts.partial.footer')
</body>
</html>