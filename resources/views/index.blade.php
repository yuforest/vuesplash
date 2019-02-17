<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app_name') }}</title>
  <script src="{{ mix('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch"  href="//fonts.gstatic.com">
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Merriweather|Roboto:400">
  <link rel="stylesheet"  href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <div id="app"></div>
</body>
</html>
