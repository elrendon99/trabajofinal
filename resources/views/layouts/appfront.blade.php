<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', $config->seo_title)</title>
    <meta name="description" content="@yield('description', $config->seo_description)">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="@yield('description',  $config->seo_description)"/>
    <meta property="og:url" content="@yield('url','https://artesanias.com')"/>   
    <meta property="og:site_name" content="artesanias.com" />
    <meta property="og:image" content="@yield('image','https://artesanias.com/img/configuracion/'.$config->seo_urlfoto)" />
    <link rel="canonical" href="@yield('url','https://artesanias.com')"/>
    <link rel="shortcut icon" href="/img/configuracion/{{$config->urlfavicon}}" type="image/png" />

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <style>
        h1,h2,h3,.nav-link,.font-anton{
            font-family: 'Anton', sans-serif;
        }
        p,ul,li{font-family: 'Nunito', sans-serif;}
        .navbar-light .navbar-nav .nav-link {color:#07EFFF !important}
        .bg-danger{ background:#07EFFF !important}
        .text-danger{ color:#07EFFF !important}
        .text-warning{ color:#FFC926 !important}
        .bg-warning{ background:#FFC926 !important}
    </style>
</head>
<body class="bg-danger">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/img/configuracion/{{$config->urllogo}}" alt="Logo Artesanías" width="150">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/" title="Portada">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/empresa" title="Empresa">Empresa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/artesanias" title="Últimas publicaciones">Productos</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog" title="Últimas publicaciones">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacto" title="Datos contacto">Contacto</a>
                        </li>
                    </ul>

                   
                </div>
            </div>
        </nav>

        @yield('content')
</body>
</html>
