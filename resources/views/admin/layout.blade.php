<!--
=========================================================
Material Dashboard PRO - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard-pro
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jun 2020 19:31:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('../assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('../assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Dashboard PRO by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="dashboard.html" />
    <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg" />
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{!! csrf_token() !!}">
{{--<meta name="_token" content="leLFmCYSqJrAlCtKdYLa1JVDIqNJp4xsva8rWEKS">--}}
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{asset('../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
    <!-- CSS Files -->
    <link href="{{asset('../assets/css/material-dashboard.min1c51.css?v=2.1.2')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('../assets/demo/demo.css')}}" rel="stylesheet" />
    <link href="{{asset('../assets/css/style.css')}}" rel="stylesheet" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="">
<!-- Extra details for Live View on GitHub Pages -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo"><a href="http://www.creative-tim.com/" class="simple-text logo-mini">
                CT
            </a>
            <a href="http://www.creative-tim.com/" class="simple-text logo-normal">
                Creative Tim
            </a></div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{asset('../assets/img/faces/default-avatar.png')}}" />
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
               {{Auth::user()->name}}
                <b class="caret"></b>
              </span>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> My Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> EP </span>
                                    <span class="sidebar-normal"> Edit Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> S </span>
                                    <span class="sidebar-normal"> Settings </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active ">
                    <a class="nav-link" href="{{route('index')}}">
                        <i class="material-icons">dashboard</i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="{{route('users.index')}}">
                        <i class="material-icons">people</i>
                        <p> Users </p>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="{{route('roles.index')}}">
                        <i class="material-icons">military_tech</i>
                        <p> Roles </p>
                    </a>
                </li>
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#pagesExamples">--}}
{{--                        <i class="material-icons">image</i>--}}
{{--                        <p> Pages--}}
{{--                            <b class="caret"></b>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="pagesExamples">--}}
{{--                        <ul class="nav">--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="{{asset('')}}pages/pricing.html">--}}
{{--                                    <span class="sidebar-mini"> P </span>--}}
{{--                                    <span class="sidebar-normal"> Pricing </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="{{asset('')}}pages/rtl.html">--}}
{{--                                    <span class="sidebar-mini"> RS </span>--}}
{{--                                    <span class="sidebar-normal"> RTL Support </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="{{asset('')}}pages/timeline.html">--}}
{{--                                    <span class="sidebar-mini"> T </span>--}}
{{--                                    <span class="sidebar-normal"> Timeline </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="{{asset('')}}pages/login.html">--}}
{{--                                    <span class="sidebar-mini"> LP </span>--}}
{{--                                    <span class="sidebar-normal"> Login Page </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="pages/register.html">--}}
{{--                                    <span class="sidebar-mini"> RP </span>--}}
{{--                                    <span class="sidebar-normal"> Register Page </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="pages/lock.html">--}}
{{--                                    <span class="sidebar-mini"> LSP </span>--}}
{{--                                    <span class="sidebar-normal"> Lock Screen Page </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="pages/user.html">--}}
{{--                                    <span class="sidebar-mini"> UP </span>--}}
{{--                                    <span class="sidebar-normal"> User Profile </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="pages/error.html">--}}
{{--                                    <span class="sidebar-mini"> E </span>--}}
{{--                                    <span class="sidebar-normal"> Error Page </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#componentsExamples">--}}
{{--                        <i class="material-icons">apps</i>--}}
{{--                        <p> Components--}}
{{--                            <b class="caret"></b>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="componentsExamples">--}}
{{--                        <ul class="nav">--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">--}}
{{--                                    <span class="sidebar-mini"> MLT </span>--}}
{{--                                    <span class="sidebar-normal"> Multi Level Collapse--}}
{{--                      <b class="caret"></b>--}}
{{--                    </span>--}}
{{--                                </a>--}}
{{--                                <div class="collapse" id="componentsCollapse">--}}
{{--                                    <ul class="nav">--}}
{{--                                        <li class="nav-item ">--}}
{{--                                            <a class="nav-link" href="#0">--}}
{{--                                                <span class="sidebar-mini"> E </span>--}}
{{--                                                <span class="sidebar-normal"> Example </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="components/buttons.html">--}}
{{--                                    <span class="sidebar-mini"> B </span>--}}
{{--                                    <span class="sidebar-normal"> Buttons </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="components/grid.html">--}}
{{--                                    <span class="sidebar-mini"> GS </span>--}}
{{--                                    <span class="sidebar-normal"> Grid System </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="components/panels.html">--}}
{{--                                    <span class="sidebar-mini"> P </span>--}}
{{--                                    <span class="sidebar-normal"> Panels </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="components/sweet-alert.html">--}}
{{--                                    <span class="sidebar-mini"> SA </span>--}}
{{--                                    <span class="sidebar-normal"> Sweet Alert </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="components/notifications.html">--}}
{{--                                    <span class="sidebar-mini"> N </span>--}}
{{--                                    <span class="sidebar-normal"> Notifications </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="components/icons.html">--}}
{{--                                    <span class="sidebar-mini"> I </span>--}}
{{--                                    <span class="sidebar-normal"> Icons </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="components/typography.html">--}}
{{--                                    <span class="sidebar-mini"> T </span>--}}
{{--                                    <span class="sidebar-normal"> Typography </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#formsExamples">--}}
{{--                        <i class="material-icons">content_paste</i>--}}
{{--                        <p> Forms--}}
{{--                            <b class="caret"></b>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="formsExamples">--}}
{{--                        <ul class="nav">--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="forms/regular.html">--}}
{{--                                    <span class="sidebar-mini"> RF </span>--}}
{{--                                    <span class="sidebar-normal"> Regular Forms </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="forms/extended.html">--}}
{{--                                    <span class="sidebar-mini"> EF </span>--}}
{{--                                    <span class="sidebar-normal"> Extended Forms </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="forms/validation.html">--}}
{{--                                    <span class="sidebar-mini"> VF </span>--}}
{{--                                    <span class="sidebar-normal"> Validation Forms </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="forms/wizard.html">--}}
{{--                                    <span class="sidebar-mini"> W </span>--}}
{{--                                    <span class="sidebar-normal"> Wizard </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#tablesExamples">--}}
{{--                        <i class="material-icons">grid_on</i>--}}
{{--                        <p> Tables--}}
{{--                            <b class="caret"></b>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="tablesExamples">--}}
{{--                        <ul class="nav">--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="tables/regular.html">--}}
{{--                                    <span class="sidebar-mini"> RT </span>--}}
{{--                                    <span class="sidebar-normal"> Regular Tables </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="tables/extended.html">--}}
{{--                                    <span class="sidebar-mini"> ET </span>--}}
{{--                                    <span class="sidebar-normal"> Extended Tables </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="tables/datatables.net.html">--}}
{{--                                    <span class="sidebar-mini"> DT </span>--}}
{{--                                    <span class="sidebar-normal"> DataTables.net </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#mapsExamples">--}}
{{--                        <i class="material-icons">place</i>--}}
{{--                        <p> Maps--}}
{{--                            <b class="caret"></b>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="mapsExamples">--}}
{{--                        <ul class="nav">--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="maps/google.html">--}}
{{--                                    <span class="sidebar-mini"> GM </span>--}}
{{--                                    <span class="sidebar-normal"> Google Maps </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="maps/fullscreen.html">--}}
{{--                                    <span class="sidebar-mini"> FSM </span>--}}
{{--                                    <span class="sidebar-normal"> Full Screen Map </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="maps/vector.html">--}}
{{--                                    <span class="sidebar-mini"> VM </span>--}}
{{--                                    <span class="sidebar-normal"> Vector Map </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" href="widgets.html">--}}
{{--                        <i class="material-icons">widgets</i>--}}
{{--                        <p> Widgets </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" href="charts.html">--}}
{{--                        <i class="material-icons">timeline</i>--}}
{{--                        <p> Charts </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" href="calendar.html">--}}
{{--                        <i class="material-icons">date_range</i>--}}
{{--                        <p> Calendar </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:;">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">
                                    Stats
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="#">Another Notification</a>
                                <a class="dropdown-item" href="#">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    Log out

                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        @yield('content')
@include('admin.footer')