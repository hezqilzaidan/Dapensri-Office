<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.admin.head')
  </head>

  <body>

 @include('layout.admin.nav')

        @include('layout.admin.header')

 @yield('content')
 @include('layout.admin.footer-scripts')


  </body>
</html>