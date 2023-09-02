<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/assets/images/favicon/favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ url('/assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('/assets/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ url('/assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ url('/assets/libs/prismjs/themes/prism-okaidia.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/assets/css/theme.min.css') }}">
    <title>SISLAB - POLINDRA</title>
    @stack('assets-header')
</head>

<body class="bg-light">
    <div id="db-wrapper">
        @include('administrator.components.sidebar')
        <!-- Page content -->
        <div id="page-content">
            @include('administrator.components.navbar')
            <div class="bg-primary pt-10 pb-21"></div>
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ url('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('assets/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ url('assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ url('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ url('assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js') }}"></script>
    <script src="{{ url('assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ url('assets/js/theme.min.js') }}"></script>
    @stack('assets-footer')
</body>

</html>
