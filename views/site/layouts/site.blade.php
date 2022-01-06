<?= doctype('html5') ?>
<html lang="{{config('SITE_LANGUAGE')}}">

<head>
    @include('site.shared.head')
    @yield('headers_includes')
</head>

<body>
    @include('site.shared.navbar')
    <div id="page-top">
        @yield('content')
    </div>
    @include('site.shared.footer')
    @yield('footer_includes')

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="{{base_url(getThemePublicPath())}}js/scripts.js"></script>
</body>

</html>