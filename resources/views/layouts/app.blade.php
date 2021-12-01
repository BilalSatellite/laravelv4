 {{-- <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

     <!-- Styles -->
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">

     @livewireStyles

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
 </head>

 <body class="font-sans hold-transition dark-skin sidebar-mini theme-primary fixed">
     <div class="wrapper">
         <x-jet-banner />
         @livewire('navigation-menu')



         <!-- Page Heading -->
         <header class="d-flex py-3 bg-white shadow-sm border-bottom">
             <div class="container">

                 {{ $header }}
             </div>
         </header>

         <!-- Page Content -->
         <div class="content-wrapper">
             <div class="container-full">
                 {{ $slot }}
             </div>
         </div>
         <!-- /.content-wrapper -->

         @stack('modals')

         @livewireScripts

         @stack('scripts')
     </div><!-- ./wrapper -->
 </body>

 </html> --}}


 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <!-- Primary Meta Tags -->
     <title>{{ config('app.name', 'Laravel') }}</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- OPTIONAL LINKS -->

     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

     <!-- overlayScrollbars -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@1.13.1/css/OverlayScrollbars.min.css" >

     <!-- Font Awesome -->
     {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css"> --}}

     <!-- REQUIRED LINKS -->



     {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
     <!-- Styles -->
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{ asset('panel/css/adminlte.css') }}">

     <!-- Scripts -->
     <link rel="stylesheet" href="{{ asset('panel/css/adminlte-dark-addon.css') }}">
     <script src="{{ asset('js/app.js') }}" defer></script>

     @livewireStyles
 </head>

 <body class="dark-mode layout-fixed">
     <div class="wrapper">
         <!-- Navbar -->
         <x-panel.panelNavbar/>
         <!-- /.navbar -->


         <!-- Main Sidebar Container -->
         <x-panel.mainSidebar/>
         <!-- Main content -->
         <main class="content-wrapper">
             <div class="content-header">
                 <div class="container-fluid">
                     <div class="row mb-2">
                         <div class="col-sm-6">
                            {{ $header }}
                         </div>
                         <div class="col-sm-6">
                             <ol class="breadcrumb float-sm-end">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="content">
                 <div class="container-fluid ">
                     <!-- Small boxes (Stat box) -->
                     {{ $slot }}
                 </div>
                 <!-- /.container-fluid -->
             </div>
         </main>
         <!-- /.content-wrapper -->

         <!-- Main Footer -->
         <footer class="main-footer">
             <!-- To the end -->
             <div class="float-end d-none d-sm-inline">
                 Anything you want
             </div>
             <!-- Default to the start -->
             <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
         </footer>


           <!-- overlayScrollbars -->
     <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@1.13.1/js/OverlayScrollbars.min.js"></script>
     <!-- AdminLTE App -->
     <script src="{{ asset('panel/js/adminlte.js') }}"></script>
     @stack('modals')

     @livewireScripts

     @stack('scripts')
     </div><!--  ./wrapper -->
 </body>

 </html>
