<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#000000">
      <title>Giftplatz</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/inner.css') }}">
   </head>
   <body>
      @include('layouts.header_2')
      @yield('content')
      @include('layouts.footer')
        <script type="text/javascript" src="{{ asset('js/giftplatz.js') }}"></script>
    </body>
</html>
