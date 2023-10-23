<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="M_Adnan" />
    <title>ECOSHOP - Multipurpose eCommerce HTML5 Template</title>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/css/settings.css') }}" media="screen" />

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

    <!-- JavaScripts -->
    <script src="{{ asset('js/modernizr.js') }}"></script>

    <!-- Online Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet"
        type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    @yield('css')
</head>

<body>
    <!-- Sweetalert -->
    @if (session()->has('error'))
        @php
            alert()->error('Error', session()->get('error'));
        @endphp
    @endif

    @if (session()->has('success'))
        @php
            alert()->success('Success', session()->get('success'));
        @endphp
    @endif

    @if ($errors->any())
        @php
            alert()->html('Error', implode('<br>', $errors->all()), 'error');
        @endphp
    @endif

    <!-- LOADER -->
    <div id="loader">
        <div class="position-center-center">
            <div class="ldr"></div>
        </div>
    </div>

    <!-- Wrap -->
    <div id="wrap">
        <!-- header -->
        <header>
            <div class="sticky">
                <div class="container">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img class="img-responsive" src="images/logo-nugimen.png" alt="" /></a>
                    </div>
                    <nav class="navbar ownmenu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#nav-open-btn" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"><i class="fa fa-navicon"></i></span>
                            </button>
                        </div>

                        <!-- NAV -->
                        @include('master.front_end.components.nav')

                        <!-- Nav Right -->
                        @include('master.front_end.components.nav_right')
                    </nav>
                </div>
            </div>
        </header>

        @if (route('frontend.index') == url()->current())
            @include('master.front_end.components.home_slider')
        @endif

        @if (route('frontend.login') == url()->current())
            @includeIf('master.front_end.components.sub_banner', [
                'name' => 'LOGIN',
            ])
        @endif

        @if (route('frontend.register') == url()->current())
            @includeIf('master.front_end.components.sub_banner', [
                'name' => 'REGISTER',
            ])
        @endif

        <div id="content">
            @yield('content')
        </div>

        <!-- About -->
        @include('master.front_end.components.about')

        <!-- News Letter -->
        @include('master.front_end.components.news_letter')

        <!--======= FOOTER =========-->
        @include('master.front_end.components.footer')

        <!--======= RIGHTS =========-->
    </div>
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/own-menu.js') }}"></script>
    <script src="{{ asset('js/jquery.lighter.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.tp.t.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.tp.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')

    @yield('js')
</body>

</html>
