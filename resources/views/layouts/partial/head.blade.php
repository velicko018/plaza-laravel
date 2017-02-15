<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Plaza Hotel') }}</title>

<!-- Styles -->
<link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! asset('css/style.css') !!}" rel="stylesheet">
<link href="{!! asset('css/cs-select.css') !!}" rel="stylesheet">
<link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet">
<link href="{!! asset('css/nivo-lightbox.css') !!}" rel="stylesheet">
<link href="{!! asset('css/nivo-lightbox-theme.css') !!}" rel="stylesheet">
<link href="{!! asset('css/owl.carousel.css') !!}" rel="stylesheet">
<link href="{!! asset('css/owl.theme.css') !!}" rel="stylesheet">
<link href="{!! asset('css/owl.transitions.css') !!}" rel="stylesheet">

<!-- Extern Styles -->
@yield('extra-css')

<!-- Scripts -->
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>