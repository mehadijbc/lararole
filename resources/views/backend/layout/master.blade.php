<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('backend.layout.partials.styles')

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
          @include('backend.layout.partials.sidebar_menu')
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            @include('backend.layout.partials.header')
            <!-- header area end -->
            <!-- page title area start -->

            @yield('admin_content')
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        @include('backend.layout.partials.footer')
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
      @include('backend.layout.partials.offset-area')
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    @include('backend.layout.partials.scripts')
</body>

</html>
