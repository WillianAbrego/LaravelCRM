<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRM</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.7.0/dt-1.13.8/datatables.min.css" rel="stylesheet">

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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <script src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.7.0/dt-1.13.8/datatables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
  </form>
  <script>
    $(document).ready(function() {
      flatpickr(".date", {
        "locale": "es",
        "dateFormat": "d/m/Y",
      });

      $('.select2').select2();
    })
    Object.assign(DataTable.defaults, {
      language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
      },
      columnDefs: [{
        targets: -1,
        searching: false,
        orderable: false,
      }, ]

    });
  </script>
  @yield('scripts')
</body>

</html>
