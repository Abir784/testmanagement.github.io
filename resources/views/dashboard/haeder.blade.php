
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from lema.frontted.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Oct 2022 18:39:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{asset('assets/vendor/perfect-scrollbar.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- App CSS -->
    <link type="text/css" href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/app.rtl.css')}}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{asset('assets/css/vendor-material-icons.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/vendor-material-icons.rtl.css')}}" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{asset('assets/css/vendor-fontawesome-free.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/vendor-fontawesome-free.rtl.css')}}" rel="stylesheet">

    <!-- ion Range Slider -->
    <link type="text/css" href="{{asset('assets/css/vendor-ion-rangeslider.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/vendor-ion-rangeslider.rtl.css')}}" rel="stylesheet">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115115077-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-115115077-3');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            '../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '257843818545228');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=257843818545228&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->





</head>

<body class="layout-default">
    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pl-md-0 pr-0" id="navbar" data-primary>
                    <div class="container-fluid pr-0 ">

                        <!-- Navbar toggler -->
                        <button class="navbar-toggler navbar-toggler-custom d-lg-none d-flex mr-navbar" type="button" data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>


                        <div class="d-flex sidebar-account flex-shrink-0 mr-auto mr-lg-0">
                            <a href="{{url('/')}}" class="flex d-flex align-items-center text-underline-0">
                                <span class="mr-1  text-white">
                                    <!-- LOGO -->
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30" height="30">
                                        <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                            <path d="M12.177,7.4c-0.23,0-0.416,0.186-0.417,0.416v1.17c-0.011,0.23,0.166,0.426,0.396,0.437s0.426-0.166,0.437-0.396 c0.001-0.014,0.001-0.027,0-0.041V7.819c0.001-0.23-0.185-0.418-0.415-0.419C12.178,7.4,12.177,7.4,12.177,7.4z M7.51,18.486 c-0.23,0-0.416,0.186-0.416,0.416l0,0v0.585c-0.011,0.23,0.166,0.426,0.396,0.437s0.426-0.166,0.437-0.396 c0.001-0.014,0.001-0.027,0-0.041V18.9C7.925,18.671,7.739,18.487,7.51,18.486z M20.15,4.04c-0.232-0.047-0.4-0.252-0.4-0.489V2 c0-1.105-0.895-2-2-2H5.25c-1.637,0-2.972,1.311-3,2.948c0,0.017,0,18.052,0,18.052c0,1.657,1.343,3,3,3h14.5c1.105,0,2-0.895,2-2 V6C21.75,5.049,21.081,4.23,20.15,4.04z M4.25,3c0-0.552,0.448-1,1-1h12c0.276,0,0.5,0.224,0.5,0.5v1c0,0.276-0.224,0.5-0.5,0.5 h-12C4.698,4,4.25,3.552,4.25,3z M9.427,16.569c0,0.423-0.141,0.833-0.4,1.167c0.259,0.334,0.4,0.744,0.4,1.167v0.583 c-0.003,1.057-0.86,1.912-1.917,1.914H6.344c-0.414,0-0.75-0.336-0.75-0.75v-5.831c0-0.414,0.336-0.75,0.75-0.75H7.51 c1.058,0.002,1.915,0.859,1.917,1.917V16.569z M14.093,12.486c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75v-1.167 c-0.011-0.23-0.207-0.407-0.437-0.396c-0.214,0.011-0.386,0.182-0.396,0.396v1.167c0,0.414-0.336,0.75-0.75,0.75 s-0.75-0.336-0.75-0.75V7.819c0.024-1.058,0.902-1.897,1.96-1.873c1.024,0.023,1.849,0.848,1.873,1.873V12.486z M18.01,19.9 c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75c-1.702-0.002-3.081-1.382-3.083-3.084v-1.163 c0.002-1.702,1.381-3.082,3.083-3.084c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75c-0.874,0.001-1.582,0.71-1.583,1.584 v1.166C16.429,19.192,17.137,19.899,18.01,19.9z M7.51,15.569c-0.23,0-0.416,0.186-0.416,0.416l0,0v0.585 C7.083,16.8,7.26,16.996,7.49,17.007s0.426-0.166,0.437-0.396c0.001-0.014,0.001-0.027,0-0.041v-0.583 C7.927,15.757,7.74,15.57,7.51,15.569z" stroke="none" fill="#ffffff" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="flex d-flex flex-column text-white">
                                    <strong class="sidebar-brand">{{ config('app.name', 'Laravel') }}</strong>
                                </span>
                            </a>
                        </div>
                        <div class="dropdown">
                            <a href="#account_menu" class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar" data-toggle="dropdown">
                                {{-- <img src="{{asset('assets/images/avatar/demi.png')}}" class="rounded-circle" width="32" alt="Frontted"> --}}
                                <span class="ml-1 d-flex-inline">
                                    <span class="text-light">{{Auth::user()->name}}</span>
                                </span>
                            </a>
                            <div id="company_menu" class="dropdown-menu dropdown-menu-right navbar-company-menu">
                                <div class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">

                                    <span class="mr-3">
                                        {{-- <img src="{{asset('assets/images/frontted-logo-blue.svg')}}" width="43" height="43" alt="avatar"> --}}
                                    </span>
                                    <span class="flex d-flex flex-column">
                                        {{-- <strong class="h5 m-0">{{Auth::user()->name}}</strong> --}}
                                        <small class="text-muted text-uppercase">
                                            @if (Auth::user()->role ==0)
                                            SUPER ADMIN
                                            @elseif (Auth::user()->role ==1)
                                            ADMIN
                                            @elseif (Auth::user()->role==3)
                                              INSTRUCTOR
                                            @endif
                                        </small>
                                    </span>

                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item d-flex align-items-center py-2" href="{{route('student_edit_individual.index',Auth::user()->id)}}">
                               <span class="material-icons mr-2">account_circle</span> Change Password
                                </a>


                                </a>
                                <a class="dropdown-item d-flex align-items-center py-2"  href="{{ route('logout')}}"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                 <span class="material-icons mr-2">exit_to_app</span> Logout
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
       <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header bg-dark js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pr-0 pl-md-0 pr-0" id="navbar" data-primary>
                    <div class="container-fluid pr-0 ">

                        <!-- Navbar toggler -->
                        <button class="navbar-toggler navbar-toggler-custom d-lg-none d-flex mr-navbar" type="button" data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>


                        <div class="d-flex sidebar-account flex-shrink-0 mr-auto mr-lg-0">
                            <a href="fluid-index.html" class="flex d-flex align-items-center text-underline-0">
                                <span class="mr-1  text-white">
                                    <!-- LOGO -->
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30" height="30">
                                        <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                            <path d="M12.177,7.4c-0.23,0-0.416,0.186-0.417,0.416v1.17c-0.011,0.23,0.166,0.426,0.396,0.437s0.426-0.166,0.437-0.396 c0.001-0.014,0.001-0.027,0-0.041V7.819c0.001-0.23-0.185-0.418-0.415-0.419C12.178,7.4,12.177,7.4,12.177,7.4z M7.51,18.486 c-0.23,0-0.416,0.186-0.416,0.416l0,0v0.585c-0.011,0.23,0.166,0.426,0.396,0.437s0.426-0.166,0.437-0.396 c0.001-0.014,0.001-0.027,0-0.041V18.9C7.925,18.671,7.739,18.487,7.51,18.486z M20.15,4.04c-0.232-0.047-0.4-0.252-0.4-0.489V2 c0-1.105-0.895-2-2-2H5.25c-1.637,0-2.972,1.311-3,2.948c0,0.017,0,18.052,0,18.052c0,1.657,1.343,3,3,3h14.5c1.105,0,2-0.895,2-2 V6C21.75,5.049,21.081,4.23,20.15,4.04z M4.25,3c0-0.552,0.448-1,1-1h12c0.276,0,0.5,0.224,0.5,0.5v1c0,0.276-0.224,0.5-0.5,0.5 h-12C4.698,4,4.25,3.552,4.25,3z M9.427,16.569c0,0.423-0.141,0.833-0.4,1.167c0.259,0.334,0.4,0.744,0.4,1.167v0.583 c-0.003,1.057-0.86,1.912-1.917,1.914H6.344c-0.414,0-0.75-0.336-0.75-0.75v-5.831c0-0.414,0.336-0.75,0.75-0.75H7.51 c1.058,0.002,1.915,0.859,1.917,1.917V16.569z M14.093,12.486c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75v-1.167 c-0.011-0.23-0.207-0.407-0.437-0.396c-0.214,0.011-0.386,0.182-0.396,0.396v1.167c0,0.414-0.336,0.75-0.75,0.75 s-0.75-0.336-0.75-0.75V7.819c0.024-1.058,0.902-1.897,1.96-1.873c1.024,0.023,1.849,0.848,1.873,1.873V12.486z M18.01,19.9 c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75c-1.702-0.002-3.081-1.382-3.083-3.084v-1.163 c0.002-1.702,1.381-3.082,3.083-3.084c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75c-0.874,0.001-1.582,0.71-1.583,1.584 v1.166C16.429,19.192,17.137,19.899,18.01,19.9z M7.51,15.569c-0.23,0-0.416,0.186-0.416,0.416l0,0v0.585 C7.083,16.8,7.26,16.996,7.49,17.007s0.426-0.166,0.437-0.396c0.001-0.014,0.001-0.027,0-0.041v-0.583 C7.927,15.757,7.74,15.57,7.51,15.569z" stroke="none" fill="#ffffff" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="flex d-flex flex-column text-white">
                                    <strong class="sidebar-brand">LEMA</strong>
                                </span>
                            </a>
                        </div>





                        <ul class="ml-auto nav navbar-nav mr-2 d-none d-lg-flex">
                            <li class="nav-item"><a href="#" class="nav-link">Get Help</a></li>
                        </ul>


                        <form class="search-form search-form--light d-none d-sm-flex flex ml-3" action="https://lema.frontted.com/fluid-index.html">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="btn" type="submit"><i class="material-icons">search</i></button>
                        </form>


                        <ul class="nav navbar-nav d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <span class="nav-icon navbar-notifications-indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="25" height="25">
                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                <path d="M21.5,12.254c0.003-5.247-4.248-9.502-9.494-9.506C6.759,2.745,2.503,6.996,2.5,12.243 c-0.002,2.915,1.335,5.669,3.625,7.471l-2.332,2.333c-0.39,0.39-0.39,1.024,0,1.414c0.394,0.383,1.02,0.383,1.414,0L7.863,20.8 c2.613,1.267,5.661,1.267,8.274,0l2.656,2.657c0.394,0.383,1.02,0.383,1.414,0c0.39-0.39,0.39-1.024,0-1.414l-2.332-2.333 C20.163,17.912,21.499,15.164,21.5,12.254z M11.25,5.754c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75V11.5h2.75 c0.414,0,0.75,0.336,0.75,0.75S15.914,13,15.5,13H12c-0.414,0-0.75-0.336-0.75-0.75V5.754z M7.4,2.27 c0.251-0.115,0.361-0.412,0.246-0.663c-0.028-0.061-0.067-0.115-0.117-0.16C5.711-0.236,2.873-0.127,1.19,1.691 c-1.593,1.72-1.593,4.376,0,6.096C1.285,7.89,1.418,7.948,1.558,7.948c0.195-0.001,0.371-0.114,0.454-0.29 C3.11,5.278,5.02,3.368,7.4,2.27z M19.5,0.254c-1.125,0.003-2.207,0.429-3.033,1.193c-0.204,0.187-0.217,0.503-0.031,0.706 c0.045,0.049,0.099,0.089,0.16,0.117c2.38,1.098,4.29,3.008,5.388,5.388c0.085,0.174,0.26,0.286,0.454,0.29 c0.14,0,0.273-0.058,0.368-0.161c1.683-1.818,1.573-4.657-0.245-6.339C21.728,0.677,20.634,0.251,19.5,0.254z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                    <div class="dropdown-item d-flex align-items-center py-2">
                                        <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                        <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
                                    </div>
                                    <div class="navbar-notifications-menu__content" style="position:relative" data-perfect-scrollbar>

                                        <div class="dropdown-item d-flex py-2">
                                            <div class="mr-3">
                                                <div class="avatar avatar-xs">
                                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="">
                                                <a href="#">A.Demian</a> left a comment on <a href="#">Stack</a><br>
                                                <small class="text-muted">1 minute ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs">
                                                        <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                New user <a href="#">Peter Parker</a> signed up.<br>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </div>


                                        <div class="dropdown-item d-flex py-2">
                                            <div class="mr-3">
                                                <div class="avatar avatar-xs">
                                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="">
                                                <a href="#">A.Demian</a> left a comment on <a href="#">Stack</a><br>
                                                <small class="text-muted">1 minute ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs">
                                                        <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                New user <a href="#">Peter Parker</a> signed up.<br>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </div>


                                        <div class="dropdown-item d-flex py-2">
                                            <div class="mr-3">
                                                <div class="avatar avatar-xs">
                                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="">
                                                <a href="#">A.Demian</a> left a comment on <a href="#">Stack</a><br>
                                                <small class="text-muted">1 minute ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs">
                                                        <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                New user <a href="#">Peter Parker</a> signed up.<br>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </div>





                                        <a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#events-drawer" data-toggle="sidebar" class="nav-link d-flex align-items-center">
                                    <span class=" nav-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="25" height="25">
                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                <path d="M21.5,3h-2.75c-0.138,0-0.25-0.112-0.25-0.25V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v4.75c0,0.414-0.336,0.75-0.75,0.75 S15,6.164,15,5.75V3.5C15,3.224,14.776,3,14.5,3H8.25C8.112,3,8.001,2.889,8,2.751V1c0-0.552-0.448-1-1-1S6,0.448,6,1v4.75 C6,6.164,5.664,6.5,5.25,6.5S4.5,6.164,4.5,5.75V3.5C4.5,3.224,4.276,3,4,3H2.5c-1.105,0-2,0.895-2,2v17c0,1.105,0.895,2,2,2h19 c1.105,0,2-0.895,2-2V5C23.5,3.895,22.605,3,21.5,3z M21.5,21.5c0,0.276-0.224,0.5-0.5,0.5H3c-0.276,0-0.5-0.224-0.5-0.5v-12 C2.5,9.224,2.724,9,3,9h18c0.276,0,0.5,0.224,0.5,0.5V21.5z M18.185,13.111l-6-2.383c-0.119-0.046-0.251-0.046-0.37,0l-6,2.383 c-0.193,0.077-0.319,0.266-0.315,0.474c0,0.034,0,3.38,0,3.38c0,0.414,0.336,0.75,0.75,0.75S7,17.379,7,16.965v-2.506l4.834,1.706 c0.107,0.038,0.225,0.038,0.332,0l6-2.118c0.26-0.092,0.397-0.377,0.305-0.638C18.423,13.273,18.319,13.164,18.185,13.111z M15.263,15.829L12,16.981l-3.263-1.152c-0.26-0.092-0.546,0.045-0.638,0.306c-0.019,0.053-0.028,0.11-0.028,0.166v2.145 c0,0.212,0.134,0.402,0.334,0.472l2.574,0.908c0.661,0.232,1.381,0.232,2.042,0l2.574-0.908c0.2-0.07,0.334-0.26,0.334-0.472V16.3 c0-0.276-0.223-0.5-0.5-0.5c-0.057,0-0.113,0.01-0.166,0.028L15.263,15.829z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <!-- <li class="nav-item nav-item-circle">
          <a href="#" class="nav-link d-flex align-items-center navbar-circle-link">
          <span class="rounded-circle">
            <span class="material-icons text-primary">flag</span>
          </span>
        </a>
      </li> -->
                        </ul>

                        <div class="dropdown">
                            <a href="#account_menu" class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar" data-toggle="dropdown">
                                <img src="assets/images/avatar/demi.png" class="rounded-circle" width="32" alt="Frontted">
                                <span class="ml-1 d-flex-inline">
                                    <span class="text-light">Adrian D.</span>
                                </span>
                            </a>
                            <div id="company_menu" class="dropdown-menu dropdown-menu-right navbar-company-menu">
                                <div class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">

                                    <span class="mr-3">
                                        <img src="assets/images/frontted-logo-blue.svg" width="43" height="43" alt="avatar">
                                    </span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="h5 m-0">Adrian D.</strong>
                                        <small class="text-muted text-uppercase">STUDENT</small>
                                    </span>

                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item d-flex align-items-center py-2" href="fluid-student-edit-account.html">
                                    <span class="material-icons mr-2">account_circle</span> Edit Account
                                </a>
                                <a class="dropdown-item d-flex align-items-center py-2" href="#">
                                    <span class="material-icons mr-2">settings</span> Settings
                                </a>
                                <a class="dropdown-item d-flex align-items-center py-2" href="login.html">
                                    <span class="material-icons mr-2">exit_to_app</span> Logout
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content page">


            <div class="page__header flush-shadow">
                <div class="container-fluid page__heading-container">
                    <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                        @if(Auth::user()->role==1)
                        <h1 class="m-lg-0 text-blue">Admin Dashboard</h1>

                        @elseif (Auth::user()->role==0)
                        <h1 class="m-lg-0 text-blue">Super Admin Dashboard</h1>
                        @elseif(Auth::user()->role==2)
                        <h1 class="m-lg-0 text-blue">Student Dashboard</h1>

                        @elseif(Auth::user()->role==3)
                        <h1 class="m-lg-0 text-blue">Instructor Dashboard</h1>

                        @endif
                    </div>
                </div>
            </div> <!-- // END page__header -->

                {{-- NAv bar Started --}}
            <div class="page__header page__header-nav">
                <div class="container-fluid page__container">
                    <div class="navbar navbar-secondary navbar-light navbar-expand-sm p-0 d-none d-md-flex" id="secondaryNavbar">
                        <ul class="nav navbar-nav">
                            @if (Auth::user()->role==2)
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Quizzes</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('student.quiz.index')}}">Take Quiz</a>
                                    <a class="dropdown-item" href="{{route('student.assignment.index')}}">Assignments</a>

                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Results</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('course_based.result')}}">Coursed Based Quiz Results</a>
                                    <a class="dropdown-item" href="{{route('independent_quiz_result.result')}}">Free Quiz Results</a>
                                    <a class="dropdown-item" href="{{route('individual_quiz_result.result')}}">Individual Quiz Results</a>
                                    <a class="dropdown-item" href="{{route('certificate.index')}}">Certificate</a>

                                </div>
                            </li>

                            @endif
                            @if (Auth::user()->role == 0)
                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Administrator</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="{{route('add_admin.index')}}">Add Administrators</a>
                                    <a class="dropdown-item active" href="{{route('show.admins')}}">Show Administrators</a>
                            </li>
                            {{-- <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Config</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="{{route('course.index')}}">Add Courses</a>
                                    <a class="dropdown-item active" href="{{route('course.show')}}">Show Courses</a>
                            </li> --}}

                            @endif



                            @if (Auth::user()->role ==1 || Auth::user()->role == 0)


                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Course</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="{{route('course.index')}}">Add Courses</a>
                                    <a class="dropdown-item active" href="{{route('course.show')}}">Show Courses</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Batches</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="{{route('batch.index')}}">Add Batches</a>
                                    <a class="dropdown-item active" href="{{route('batch.show')}}">Show Batches</a>
                            </li>

                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Students</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="{{ route('add_student.index') }}">Add Students</a>
                                    <a class="dropdown-item active" href="{{ route('add_student.show') }}">Show Students</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Question Bank</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="{{route('subject.index')}}">Add Subjects</a>
                                    <a class="dropdown-item active" href="{{route('module.index')}}">Add Modules</a>

                            </li>
                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Quiz</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="{{route('quiz.index')}}">Create Independent Quiz</a>
                                    <a class="dropdown-item active" href="{{route('course_based_test.index')}}">Create Course Based Quiz</a>
                                    <a class="dropdown-item active" href="{{route('individual_test.index')}}">Create Individual Quiz</a>
                                    <a class="dropdown-item active" href="{{route('assignment.index')}}">Create Assignment</a>

                            </li>

                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Reports</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="{{url('admin/course_wise_tabulation_marks/index')}}">Course Wise Tabulation Sheet[Marks]</a>
                                    <a class="dropdown-item active" href="{{url('admin/course_wise_tabulation_grades/index')}}">Course Wise Tabulation Sheet[GPA]</a>
                                    <a class="dropdown-item active" href="{{url('admin/course_wise_result_sheet/index')}}">Course Wise Result Sheet</a>
                                    <a class="dropdown-item active" href="{{url('admin/course_wise_exam_attendace_sheet/index')}}">Course Wise Attendance Sheet[Perticular Exam]</a>
                                    <a class="dropdown-item active" href="{{url('admin/individual_attendance_sheet/index')}}">Indiviudal Attendance Sheet[All Exam]</a>
                                    <a class="dropdown-item active" href="{{url('admin/course_wise_attendance_sheet/index')}}">Course wise Attendance Sheet</a>
                                    <a class="dropdown-item active" href="{{url('admin/course_wise_absent_sheet/index')}}">Course wise Absent Sheet</a>
                                    <a class="dropdown-item active" href="{{url('admin/course_wise_exam_schedule/index')}}">Exam Schedule</a>
                                    <a class="dropdown-item active" href="{{url('admin/course_wise_exam_date_range_schedule/index')}}">Exam Schedule [Date Range]</a>
                                    <a class="dropdown-item active" href="{{url('admin/course_wise_exam_postponed_list/index')}}">Postponed Exam List</a>
                            </li>

                            @endif



                            @if (Auth::user()->role ==0 || Auth::user()->role == 1 || Auth::user()->role == 3)
                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Submissions</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="{{ url('admin/independent/DescriptiveAnswerMarking/Index')}}">Independent Descriptive Answers</a>
                                    <a class="dropdown-item active" href="{{ url('admin/CourseBased/DescriptiveAnswerMarking/Index')}}">Course Based Descriptive Answers</a>
                                    <a class="dropdown-item active" href="{{ url('admin/Individual/DescriptiveAnswerMarking/Index')}}">Individual Descriptive Answers</a>
                                    <a class="dropdown-item active" href="{{url('admin/Assignment/Index')}}">Assignment Submissions</a>
                            </li>
                            @endif
                        </ul>
                        </div>
                    </div>
                </div>



            <div class="container-fluid page__container">
                @yield('content')
            </div>

            {{-- <div class="bg-dark text-white" id="footer">
                <div class="container-fluid page__container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="brand d-flex align-items-center mb-4">
                                <span class="mr-2">
                                    <!-- LOGO -->
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="24" height="24">
                                        <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                            <path d="M12.177,7.4c-0.23,0-0.416,0.186-0.417,0.416v1.17c-0.011,0.23,0.166,0.426,0.396,0.437s0.426-0.166,0.437-0.396 c0.001-0.014,0.001-0.027,0-0.041V7.819c0.001-0.23-0.185-0.418-0.415-0.419C12.178,7.4,12.177,7.4,12.177,7.4z M7.51,18.486 c-0.23,0-0.416,0.186-0.416,0.416l0,0v0.585c-0.011,0.23,0.166,0.426,0.396,0.437s0.426-0.166,0.437-0.396 c0.001-0.014,0.001-0.027,0-0.041V18.9C7.925,18.671,7.739,18.487,7.51,18.486z M20.15,4.04c-0.232-0.047-0.4-0.252-0.4-0.489V2 c0-1.105-0.895-2-2-2H5.25c-1.637,0-2.972,1.311-3,2.948c0,0.017,0,18.052,0,18.052c0,1.657,1.343,3,3,3h14.5c1.105,0,2-0.895,2-2 V6C21.75,5.049,21.081,4.23,20.15,4.04z M4.25,3c0-0.552,0.448-1,1-1h12c0.276,0,0.5,0.224,0.5,0.5v1c0,0.276-0.224,0.5-0.5,0.5 h-12C4.698,4,4.25,3.552,4.25,3z M9.427,16.569c0,0.423-0.141,0.833-0.4,1.167c0.259,0.334,0.4,0.744,0.4,1.167v0.583 c-0.003,1.057-0.86,1.912-1.917,1.914H6.344c-0.414,0-0.75-0.336-0.75-0.75v-5.831c0-0.414,0.336-0.75,0.75-0.75H7.51 c1.058,0.002,1.915,0.859,1.917,1.917V16.569z M14.093,12.486c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75v-1.167 c-0.011-0.23-0.207-0.407-0.437-0.396c-0.214,0.011-0.386,0.182-0.396,0.396v1.167c0,0.414-0.336,0.75-0.75,0.75 s-0.75-0.336-0.75-0.75V7.819c0.024-1.058,0.902-1.897,1.96-1.873c1.024,0.023,1.849,0.848,1.873,1.873V12.486z M18.01,19.9 c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75c-1.702-0.002-3.081-1.382-3.083-3.084v-1.163 c0.002-1.702,1.381-3.082,3.083-3.084c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75c-0.874,0.001-1.582,0.71-1.583,1.584 v1.166C16.429,19.192,17.137,19.899,18.01,19.9z M7.51,15.569c-0.23,0-0.416,0.186-0.416,0.416l0,0v0.585 C7.083,16.8,7.26,16.996,7.49,17.007s0.426-0.166,0.437-0.396c0.001-0.014,0.001-0.027,0-0.041v-0.583 C7.927,15.757,7.74,15.57,7.51,15.569z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        </div>
                        <div class="col-md-9">
                            <div class="row text-right">

                                <div class="col-sm-6 col-md-12 m-auto">
                                    <h5>Contact us</h5>
                                    <p class="text-light">Street Name, Suite 12<br /> Dublin, Ireland</p>

                                    <div class="d-flex float-right">

                                        <a href="#" class="btn btn-facebook btn-rounded-social d-flex align-items-center justify-content-center mr-2"><i class="fab fa-facebook"></i></a>
                                        <a href="#" class="btn btn-twitter btn-rounded-social d-flex align-items-center justify-content-center mr-2"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="btn btn-secondary btn-rounded-social d-flex align-items-center justify-content-center mr-2"><i class="fab fa-github"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->


    <div class="mdk-drawer js-mdk-drawer" id="events-drawer" data-align="end">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left" data-perfect-scrollbar>




                <small class="text-dark-gray px-3 py-1">
                    <strong>Thursday, 28 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Marketing Team Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Wednesday, 27 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>07:48 PM</small>
                                <small class="text-dark-gray">30 min</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call Alex</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>



                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Tuesday, 26 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>03:13 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Design Team Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/stories/256_rsz_clem-onojeghuo-193397-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Monday, 25 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col d-flex">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call Wendy</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>


                                <div class="avatar avatar-xs">
                                    <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


<!-- jQuery -->
<script src="{{asset('assets/vendor/jquery.min.js')}}"></script>
<!--Sweet Alert-->
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap.min.js')}}"></script>

<!-- Perfect Scrollbar -->
<script src="{{asset('assets/vendor/perfect-scrollbar.min.js')}}"></script>

<!-- DOM Factory -->
<script src="{{asset('assets/vendor/dom-factory.js')}}"></script>

<!-- MDK -->
<script src="{{asset('assets/vendor/material-design-kit.js')}}"></script>

<!-- Range Slider -->
<script src="{{asset('assets/vendor/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/js/ion-rangeslider.js')}}"></script>

<!-- App -->
<script src="{{asset('assets/js/toggle-check-all.js')}}"></script>
<script src="{{asset('assets/js/check-selected-row.js')}}"></script>
<script src="{{asset('assets/js/dropdown.js')}}"></script>
<script src="{{asset('assets/js/sidebar-mini.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

<!-- App Settings (safe to remove) -->
<script src="{{asset('assets/js/app-settings.js')}}"></script>
@yield('js_code')




</body>


<!-- Developed with Love by Abir_784-->
</html>
