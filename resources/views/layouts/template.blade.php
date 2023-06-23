<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <!-- App favicon -->
   <link rel="shortcut icon" href="assets/images/favicon.ico">

   <!-- Plugin css -->
   <link href="{{ url("assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css") }}" rel="stylesheet" type="text/css" />

   <!-- Theme Config Js -->
   <script src="{{ url("assets/js/hyper-config.js") }}"></script>

   <!-- App css -->
   <link href="{{ url("assets/css/app-saas.min.css") }}" rel="stylesheet" type="text/css" id="app-style" />

   <!-- Icons css -->
   {{-- <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" /> --}}
   {{-- <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/solid.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> --}}
     <!-- App css -->
     <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />
     <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link  href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/solid.css">
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
     <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <div class="wrapper">
        @include('partials.nav')
        @include('partials.sidebar')

        @yield('content')
    </div>
    <!-- Vendor js -->
    <script src="{{ url('assets/js/vendor.min.js') }}"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Bootstrap Datepicker js -->
    <script src="{{ url('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- Chart js -->
    <script src="{{ url('assets/vendor/chart.js/chart.min.js') }}"></script>

    <!-- Projects Analytics Dashboard App js -->
    <script src="{{ url('assets/js/pages/demo.dashboard-projects.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('assets/js/app.min.js') }}"></script>

    <script> 
  $(document).ready(function() {
        $('.btn').click(function(){ 
            alert('You have');
        });
    });
     </script>
</body>
</html>