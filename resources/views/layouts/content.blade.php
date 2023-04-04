<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  @include('layouts.css')

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
  </div>
  <!-- ./wrapper -->
  @include('layouts.js')
</body>

</html>