<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>APP LES</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('assets/oreo/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ url('assets/oreo/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('assets/oreo/assets/css/color_skins.css') }}">
    @yield('css')
</head>

<body class="theme-purple">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ url('assets/oreo/assets/images/logo.svg') }}" width="48"
                    height="48" alt="Oreo"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Top Bar -->
    @include('layouts.template.top')

    <!-- Left Sidebar -->
    @include('layouts.template.leftsidebar')

    <!-- Right Sidebar -->
    @include('layouts.template.rightsidebar')

    <!-- Chat-launcher -->
    @include('layouts.template.chat')

    <!-- Main Content -->
    @yield('content')

    <!-- Jquery Core Js -->
    <script src="{{ url('assets/oreo/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ url('assets/oreo/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ url('assets/oreo/assets/bundles/mainscripts.bundle.js') }}"></script>
    
    @yield('js')
</body>
</html>