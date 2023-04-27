<!doctype html>
<html>
  <head>
     @include('includes.head')
  </head>

  <body class="lines" id="scrollup">
     @include('includes.header')

     @yield('content')

     @include('includes.footer')
  </body>
</html>
