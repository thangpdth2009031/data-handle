<!doctype html>
<html class="no-js" lang="en">
@include('layout.head')
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Left menu area -->
@include('layout.nab-menu')
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
</div>
@include('layout.script')
</body>

</html>
