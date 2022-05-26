<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta name=”robots” content=”noindex,nofollow”>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@yield('title','Admin | Response Realestate')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ assets('images/logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ assets('admin/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ assets('admin/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ assets('admin/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ assets('admin/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ assets('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    @yield('css')
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ assets('admin/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ assets('admin/js/config.js') }}"></script>

    <style>
        .layout-navbar{
            background-color: #03c3ec3b !important;
        }
        #layout-menu{
            background-color: #03c3ec3b !important;
        }
        .bg-menu-theme .menu-inner-shadow {
        background: linear-gradient(#bde9f9 41%, rgb(189 233 249) 95%, rgb(189 233 249)) !important;
        }
        .menu .app-brand.demo{
            height: 180px !important;
        }
        .dasboard .icons{
            width: 100%;
        }
        .dasboard {
            height: 80vh;
        }
        .dasboard h2{
            text-transform: uppercase;
        }
        .dasboard .description{
            background-color: #03c3ec3b !important;
            color: black;
            padding: 10px
        }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('admin.includes.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

            @include('admin.includes.header')


          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                @include('admin.includes.flash-message')
                {{-- <x-breadcrumb :paths="$currentPath" /> --}}

                @yield('content')
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.includes.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ assets('admin/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ assets('admin/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ assets('admin/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ assets('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ assets('admin/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ assets('admin/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    @yield('js')
  </body>
</html>
