<!DOCTYPE html>
<html>

<head>
    @include('front.layout.top')
    @yield('assets')
</head>
<body>
    @include('front.layout.header')

    @yield('content')

    @include('front.layout.footer')

    @yield('scripts')
    
    @include('front.layout.bottom')
</body>

</html>
