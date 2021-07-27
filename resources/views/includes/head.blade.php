<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') - {{ config('app.name', 'Logokopen') }} </title>
<link rel="shortcut icon" href="{{ asset('/assets/image/png/favicon.html') }}" type="image/x-icon">
<!-- Bootstrap , fonts & icons  -->
<link rel="stylesheet" href="{{ asset('/assets/plugins/bootstrap-4/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/fonts/icon-font/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/fonts/typography-font/typo.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/fonts/fontawesome-5/css/all.css') }}">
<!-- Plugin'stylesheets  -->
<link rel="stylesheet" href="{{ asset('/assets/plugins/aos/aos.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/plugins/fancybox/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/plugins/nice-select/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/plugins/slick/slick.css') }}">
<!-- Vendor stylesheets  -->
<link rel="stylesheet" href="{{ asset('/assets/css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
<!-- Custom stylesheet -->
<link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">