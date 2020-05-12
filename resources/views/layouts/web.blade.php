<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Can Cruz</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

    @include('partials.links')

</head>
<body>
    <div id="app">
        @include('partials.header')
       
        @yield('content')
        
        @include('partials.footer')
    </div>
</body>
</html>