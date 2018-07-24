<!DOCTYPE html>
<html>
<head>
    <!--  Add CSS -->
    @yield('css')
    <!-- #END# Content -->
    @include('inc.admin.head')
</head>
<body class="theme-red">
    <!-- Page Loader -->
    @include('inc.admin.loader')
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    @include('inc.admin.nav')
    <!-- #END# Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @include('inc.admin.leftbar')
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        @include('inc.admin.rightbar')
        <!-- #END# Right Sidebar -->
    </section>
    <!--  Content -->
    @yield('content')
    <!-- #END# Content -->
<!--  Add script -->
@yield('script')
<!-- #END# script -->
@include('inc.admin.script')
</body>

</html>