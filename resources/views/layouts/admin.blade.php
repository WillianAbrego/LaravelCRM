<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRM</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('layouts.partials.header')
    @include('layouts.partials.sidebar')
    <div class="content-wrapper">
      @yield('content')
    </div>
    @include('layouts.partials.footer')
  </div>

  <script src="{{ asset('css/plugin/css/jquery.min.js') }}"></script>
  <script src="{{ asset('css/plugin/css/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('css/plugin/css/adminlte.min.js') }}"></script>
</body>

</html>