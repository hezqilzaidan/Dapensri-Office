<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.user.head2')
</head>

<body>

    @include('layout.user.nav2')

    @include('layout.user.header2')

    @yield('content')
    @include('layout.user.footer-scripts2')

    @yield('c-js')
</body>

</html>
