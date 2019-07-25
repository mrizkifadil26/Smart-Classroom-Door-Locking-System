<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Smart Door Locking System | @yield('page_name')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Main Styles -->
  <link rel="stylesheet" href="{{ asset('assets/app/main.css') }}">
  <!-- Extension Styles -->
  @yield('stylesheets')
</head>
<body id="@yield('body_id')" class="@yield('body_class')">
  
  <!-- Main Content -->
  @yield('app')

  <!-- Main Script -->
  <script src="{{ asset('assets/app/main.js') }}"></script>

  <!-- Extension Script -->
  @yield('scripts')

</body>
</html>