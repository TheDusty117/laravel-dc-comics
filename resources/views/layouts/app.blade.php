<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <title>page-title</title>
  <!-- qui importa bootstrap e il resto scss es. -->
  @vite('resources/js/app.js')

</head>
<body>

  @include('partials.header')

  <main>
    <!-- contenuto -->
    @yield('content')
  </main>


  @include('partials.footer')

</body>
</html>
