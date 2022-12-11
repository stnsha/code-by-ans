<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <meta name="theme-color" content="white">
    <!-- Theme mode-->
    <script>
        let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== undefined && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
      
      
    </script>
    <!-- Page loading styles-->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .dark-mode .page-loading {
            background-color: #121519;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #6f788b;
        }

        .dark-mode .page-loading-inner>span {
            color: #fff;
            opacity: .6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            background-color: #d7dde2;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        .dark-mode .page-spinner {
            background-color: rgba(255, 255, 255, .25);
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
    </style>
    <!-- Page loading scripts-->
    <script>
        (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1500);
        };
      })();
      
    </script>
    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"
        id="google-font">
    <!-- Vendor styles-->
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/theme.min.css') }}">
</head>
<!-- Body-->

<body class="bg-secondary">
    <!-- Page loading spinner-->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Loading...</span>
        </div>
    </div>
    <!-- Page wrapper-->
    <main class="page-wrapper">
        <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
        <header class="navbar navbar-expand-lg fixed-top">
            <div class="container"><a class="navbar-brand pe-sm-3" href="{{ route('admin.dashboard') }}"><span
                        class="text-primary flex-shrink-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="32" viewBox="0 0 640 512">
                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M64 96c0-35.3 28.7-64 64-64H512c35.3 0 64 28.7 64 64V352H512V96H128V352H64V96zM0 403.2C0 392.6 8.6 384 19.2 384H620.8c10.6 0 19.2 8.6 19.2 19.2c0 42.4-34.4 76.8-76.8 76.8H76.8C34.4 480 0 445.6 0 403.2zM281 209l-31 31 31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM393 175l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z" />
                        </svg></span>Code by ANS</a>
                <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
                    <input class="form-check-input" type="checkbox" id="theme-mode">
                    <label class="form-check-label" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
                    <label class="form-check-label" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
                </div>
                <!-- User signed in state. Account dropdown on screens > 576px-->
                <div class="dropdown nav d-none d-sm-block order-lg-3"><a class="nav-link d-flex align-items-center p-0"
                        href="#" data-bs-toggle="dropdown" aria-expanded="false"><img class="border rounded-circle"
                            src="assets/img/avatar/ans01.jpg" width="48">
                        <div class="ps-2">
                            <div class="fs-xs lh-1 opacity-60">Hello,</div>
                            <div class="fs-sm dropdown-toggle">{{ Auth::check() ? auth()->user()->name : ''}}</div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end my-1">
                        <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">Account</h6><a
                            class="dropdown-item" href="account-overview.html"><i
                                class="ai-user-check fs-lg opacity-70 me-2"></i>Overview</a><a class="dropdown-item"
                            href="account-settings.html"><i class="ai-settings fs-lg opacity-70 me-2"></i>Settings</a><a
                            class="dropdown-item" href="account-billing.html"><i
                                class="ai-user fs-lg opacity-70 me-2"></i>Admin</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item"
                            href="{{ route('auth.logout') }}"><i class="ai-logout fs-lg opacity-70 me-2"></i>Sign
                            out</a>
                    </div>
                </div>
                <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
                <nav class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                        {{-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" aria-expanded="false">Landings</a>
                            <div class="dropdown-menu overflow-hidden p-0">
                                <div class="d-lg-flex">
                                    <div class="mega-dropdown-column pt-1 pt-lg-3 pb-lg-4">
                                        <ul class="list-unstyled mb-0">
                                            <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Template
                                                    Intro Page</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 rounded-3 rounded-start-0"
                                                    style="background-image: url(assets/img/megamenu/landings.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-mobile-app-showcase.html">Mobile
                                                    App Showcase</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/mobile-app.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-product.html">Product
                                                    Landing</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/product-landing.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-saas-v1.html">SaaS v.1</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/saas-1.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-saas-v2.html">SaaS v.2</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/saas-2.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-marketing-agency.html">Marketing
                                                    Agency</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/marketing-agency.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-shop.html">Shop Homepage</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/shop-homepage.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-creative-agency.html">Creative
                                                    Agency</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/creative-agency.jpg);"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-dropdown-column pb-2 pt-lg-3 pb-lg-4">
                                        <ul class="list-unstyled mb-0">
                                            <li><a class="dropdown-item" href="landing-web-studio.html">Web
                                                    Studio</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/web-studio.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="landing-corporate.html">Corporate</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/corporate.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="landing-business-consulting.html">Business Consulting</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/business-consulting.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-coworking-space.html">Coworking
                                                    Space</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/coworking.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-yoga-studio.html">Yoga
                                                    Studio</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/yoga-studio.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-blog.html">Blog Homepage</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/blog-homepage.jpg);"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-dropdown-column position-relative border-start zindex-3"></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="portfolio-list-v1.html">List View v.1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="portfolio-list-v2.html">List View v.2</a>
                                        </li>
                                        <li><a class="dropdown-item" href="portfolio-grid-v1.html">Grid View v.1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="portfolio-grid-v2.html">Grid View v.2</a>
                                        </li>
                                        <li><a class="dropdown-item" href="portfolio-slider.html">Slider View</a></li>
                                        <li><a class="dropdown-item" href="portfolio-single-v1.html">Single Project
                                                v.1</a></li>
                                        <li><a class="dropdown-item" href="portfolio-single-v2.html">Single Project
                                                v.2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="shop-catalog.html">Catalog (Listing)</a></li>
                                        <li><a class="dropdown-item" href="shop-single.html">Product Page</a></li>
                                        <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="blog-grid-sidebar.html">Grid View with
                                                Sidebar</a></li>
                                        <li><a class="dropdown-item" href="blog-grid.html">Grid View no Sidebar</a></li>
                                        <li><a class="dropdown-item" href="blog-list-sidebar.html">List View with
                                                Sidebar</a></li>
                                        <li><a class="dropdown-item" href="blog-list.html">List View no Sidebar</a></li>
                                        <li><a class="dropdown-item" href="blog-single-v1.html">Single post v.1</a></li>
                                        <li><a class="dropdown-item" href="blog-single-v2.html">Single post v.2</a></li>
                                        <li><a class="dropdown-item" href="blog-single-v3.html">Single post v.3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">About</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="about-agency.html">About - Agency</a></li>
                                        <li><a class="dropdown-item" href="about-product.html">About - Product</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="services-v1.html">Services v.1</a></li>
                                        <li><a class="dropdown-item" href="services-v2.html">Services v.2</a></li>
                                        <li><a class="dropdown-item" href="services-v3.html">Services v.3</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Contacts</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="contacts-v1.html">Contacts v.1</a></li>
                                        <li><a class="dropdown-item" href="contacts-v2.html">Contacts v.2</a></li>
                                        <li><a class="dropdown-item" href="contacts-v3.html">Contacts v.3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Specialty Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="404-v1.html">404 Error v.1</a></li>
                                        <li><a class="dropdown-item" href="404-v2.html">404 Error v.2</a></li>
                                        <li><a class="dropdown-item" href="404-v3.html">404 Error v.3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active" href="#"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Account</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Auth pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Sign In</a></li>
                                        <li><a class="dropdown-item" href="account-signup.html">Sign Up</a></li>
                                        <li><a class="dropdown-item" href="account-signinup.html">Sign In / Up</a></li>
                                        <li><a class="dropdown-item" href="account-password-recovery.html">Password
                                                Recovery</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="account-overview.html">Overview</a></li>
                                <li><a class="dropdown-item" href="account-settings.html">Settings</a></li>
                                <li><a class="dropdown-item" href="account-billing.html">Billing</a></li>
                                <li><a class="dropdown-item" href="account-orders.html">Orders</a></li>
                                <li><a class="dropdown-item" href="account-earnings.html">Earnings</a></li>
                                <li><a class="dropdown-item" href="account-chat.html">Chat (Messages)</a></li>
                                <li><a class="dropdown-item" href="account-favorites.html">Favorites (Wishlist)</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="components/typography.html">UI Kit</a></li>
                        <li class="nav-item"><a class="nav-link" href="docs/getting-started.html">Docs</a></li>--}}
                        <!-- User signed in state. Account dropdown on screens > 576px-->
                        <li class="nav-item dropdown d-sm-none mt-2"><a class="nav-link" href="#"
                                data-bs-toggle="dropdown" aria-expanded="false"><img class="border rounded-circle"
                                    src="assets/img/avatar/ans01.jpg" width="48">
                                <div class="ps-2">
                                    <div class="fs-xs lh-1 opacity-60">Hello,</div>
                                    <div class="fs-sm dropdown-toggle">ANS</div>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">Account</h6>
                                <a class="dropdown-item" href="account-overview.html"><i
                                        class="ai-user-check fs-lg opacity-70 me-2"></i>Overview</a><a
                                    class="dropdown-item" href="account-settings.html"><i
                                        class="ai-settings fs-lg opacity-70 me-2"></i>Settings</a><a
                                    class="dropdown-item" href="account-billing.html"><i
                                        class="ai-user fs-lg opacity-70 me-2"></i>Admin</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item"
                                    href="{{ route('auth.logout') }}"><i
                                        class="ai-logout fs-lg opacity-70 me-2"></i>Sign
                                    out</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Page content-->
        <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
            <div class="row pt-sm-2 pt-lg-0">
                <!-- Sidebar (offcanvas on sreens < 992px)-->
                <aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
                    <div class="position-lg-sticky top-0">
                        <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
                        <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
                            <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button"
                                data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"></button>
                            <div class="offcanvas-body">
                                <div class="pb-2 pb-lg-0 mb-4 mb-lg-5"><img class="d-block rounded-circle mb-2"
                                        src="assets/img/avatar/ans01.jpg" width="100">
                                    <h3 class="h5 mb-1">{{ Auth::check() ? auth()->user()->name : ''}}</h3>
                                    <p class="fs-sm text-muted mb-0">{{ Auth::check() ? auth()->user()->email : ''}}</p>
                                </div>
                                <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                                    <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">Account</h4><a
                                        class="nav-link fw-semibold py-2 px-0 active" href="account-overview.html"><i
                                            class="ai-user-check fs-5 opacity-60 me-2"></i>Overview</a><a
                                        class="nav-link fw-semibold py-2 px-0" href="account-settings.html"><i
                                            class="ai-settings fs-5 opacity-60 me-2"></i>Settings</a><a
                                        class="nav-link fw-semibold py-2 px-0" href="account-billing.html"><i
                                            class="ai-user fs-5 opacity-60 me-2"></i>Admin</a>
                                </nav>
                                <nav class="nav flex-column pb-2 pb-lg-4 mb-1">
                                    <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">Dashboard</h4><a
                                        class="nav-link fw-semibold py-2 px-0" href="account-orders.html"><i
                                            class="ai-note fs-5 opacity-60 me-2"></i>Personal</a><a
                                        class="nav-link fw-semibold py-2 px-0" href="account-earnings.html"><i
                                            class="ai-dollar fs-5 opacity-60 me-2"></i>Expenses</a>
                                    <a class="nav-link fw-semibold py-2 px-0" href="account-orders.html"><i
                                            class="ai-circle-check fs-5 opacity-60 me-2"></i>Reminders</a>
                                    <a class="nav-link fw-semibold py-2 px-0" href="account-chat.html"><i
                                            class="ai-note fs-5 opacity-60 me-2"></i>Notes{{-- <span
                                            class="badge bg-danger ms-auto">4</span> --}}</a>
                                    <a class="nav-link fw-semibold py-2 px-0" href="account-orders.html"><i
                                            class="ai-calendar fs-5 opacity-60 me-2"></i>Calendar</a>
                                    <a class="nav-link fw-semibold py-2 px-0" href="account-chat.html"><i
                                            class="ai-github fs-5 opacity-60 me-2"></i>Projects{{-- <span
                                            class="badge bg-danger ms-auto">4</span> --}}</a>
                                </nav>
                                <nav class="nav flex-column"><a class="nav-link fw-semibold py-2 px-0"
                                        href="{{ route('auth.logout') }}"><i
                                            class="ai-logout fs-5 opacity-60 me-2"></i>Sign
                                        out</a></nav>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- Page content-->
                <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Divider for dark mode only-->
        <hr class="d-none d-dark-mode-block">
        <!-- Sidebar toggle button-->
        <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas"
            data-bs-target="#sidebarAccount"><i class="ai-menu me-2"></i>Account menu</button>
    </main>
    {{--
    <!-- Footer
    <footer class="footer bg-dark position-relative pb-4 pt-md-3 py-lg-4 py-xl-5">
        <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
            style="background-color: rgba(255,255,255, .02);"></div>
        <div class="dark-mode container position-relative zindex-2 pt-5 pb-2">
            <!-- Columns with links-->
    <div class="row" id="links">
        <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
            <h3 class="h6 text-uppercase d-none d-md-block">Useful links</h3><a
                class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                href="#useful" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="useful"
                data-show-label="Useful links" data-hide-label="Useful links"></a>
            <div class="collapse d-md-block" id="useful" data-bs-parent="#links">
                <ul class="nav flex-column pb-2 pb-md-0">
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Trending</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Sale</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">About us</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Shipping &amp;
                            Returns</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Delivery info</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
            <h3 class="h6 text-uppercase d-none d-md-block">Decors</h3><a
                class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                href="#decors" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="decors"
                data-show-label="Decors" data-hide-label="Decors"></a>
            <div class="collapse d-md-block" id="decors" data-bs-parent="#links">
                <ul class="nav flex-column pb-2 pb-md-0">
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Vases</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Mirrors</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Paintings</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Figurines</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Textile</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Lighting</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Photo frames</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
            <h3 class="h6 text-uppercase d-none d-md-block">Categories</h3><a
                class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                href="#categories" data-bs-toggle="collapse" role="button" aria-expanded="false"
                aria-controls="categories" data-show-label="Categories" data-hide-label="Categories"></a>
            <div class="collapse d-md-block" id="categories" data-bs-parent="#links">
                <ul class="nav flex-column pb-2 pb-md-0">
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Kitchen</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Bathroom</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Living room</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Bedroom</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 pb-2 pb-md-0">
            <h3 class="h6 text-uppercase d-none d-md-block">Showroom</h3><a
                class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                href="#showroom" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="showroom"
                data-show-label="Showroom" data-hide-label="Showroom"></a>
            <div class="collapse d-md-block" id="showroom" data-bs-parent="#links">
                <ul class="nav flex-column pb-3">
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">1501 Main St, Ste
                            50<br>Tewksbury MA 01876</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1"
                            href="mailto:email@example.com">email@example.com</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="+15262200459">+1 526 220
                            0459</a></li>
                </ul>
                <ul class="list-unstyled mb-0 pb-3 pb-md-0">
                    <li class="text-nav mb-2">Mon-Fri: 8:00 - 21:00</li>
                    <li class="text-nav mb-2">Sat: 8:00 - 21:00</li>
                    <li class="text-nav">Sun: 8:00 - 21:00</li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-xl-3 mt-md-2 mt-xl-0 pt-2 pt-md-4 pt-xl-0">
            <h3 class="h6 text-uppercase mb-1 pb-1">Download our app</h3>
            <div class="d-flex d-xl-block d-xxl-flex"><a class="btn btn-secondary px-3 py-2 mt-3 me-3" href="#"><img
                        class="mx-1" src="assets/img/market/appstore-light.svg" width="120" alt="App Store"></a><a
                    class="btn btn-secondary px-3 py-2 mt-3" href="#"><img class="mx-1"
                        src="assets/img/market/googleplay-light.svg" width="119" alt="Google Play"></a></div>
        </div>
    </div>
    <!-- Nav + Switcher-->
    <div class="d-sm-flex align-items-end justify-content-between border-bottom mt-2 mt-sm-1 pt-4 pt-sm-5">
        <!-- Nav-->
        <nav class="d-flex mb-3 mb-sm-4"><a class="nav-link text-muted fs-sm fw-normal ps-0 pe-2 py-2 me-4"
                href="#">Support</a><a class="nav-link text-muted fs-sm fw-normal ps-0 pe-2 py-2 me-4"
                href="#">Privacy</a><a class="nav-link text-muted fs-sm fw-normal ps-0 pe-2 py-2 me-sm-4" href="#">Terms
                of use</a></nav>
        <!-- Language / currency switcher-->
        <div class="dropdown mb-4">
            <button class="btn btn-outline-secondary dropdown-toggle px-4" type="button" data-bs-toggle="dropdown"
                data-bs-auto-close="outside" aria-expanded="false"><img class="me-2" src="assets/img/flags/en.png"
                    width="18" alt="English / USD">Eng / USD</button>
            <div class="dropdown-menu dropdown-menu-end my-1">
                <div class="dropdown-item">
                    <select class="form-select form-select-sm">
                        <option value="usd">$ USD</option>
                        <option value="eur">€ EUR</option>
                        <option value="ukp">£ UKP</option>
                        <option value="jpy">¥ JPY</option>
                    </select>
                </div><a class="dropdown-item pb-1" href="#"><img class="me-2" src="assets/img/flags/fr.png" width="18"
                        alt="Français">Français</a><a class="dropdown-item pb-1" href="#"><img class="me-2"
                        src="assets/img/flags/de.png" width="18" alt="Deutsch">Deutsch</a><a class="dropdown-item"
                    href="#"><img class="me-2" src="assets/img/flags/it.png" width="18" alt="Italiano">Italiano</a>
            </div>
        </div>
    </div>
    <!-- Logo + Socials + Cards-->
    <div class="d-sm-flex align-items-center pt-4">
        <div class="d-sm-flex align-items-center pe-sm-2"><a
                class="navbar-brand d-inline-flex align-items-center me-sm-5 mb-4 mb-sm-0"
                href="{{ route('admin.dashboard') }}"><span class="text-primary flex-shrink-0 me-2">
                    <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z">
                        </path>
                    </svg></span><span class="text-nav">Around</span></a>
            <div class="text-nowrap mb-4 mb-sm-0"><a
                    class="btn btn-icon btn-sm btn-secondary btn-telegram rounded-circle mx-2 ms-sm-0 me-sm-3"
                    href="#"><i class="ai-telegram"></i></a><a
                    class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2 ms-sm-0 me-sm-3"
                    href="#"><i class="ai-instagram"></i></a><a
                    class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2 ms-sm-0 me-sm-3"
                    href="#"><i class="ai-facebook"></i></a><a
                    class="btn btn-icon btn-sm btn-secondary btn-pinterest rounded-circle mx-2 ms-sm-0 me-sm-3"
                    href="#"><i class="ai-pinterest"></i></a></div>
        </div><img class="ms-sm-auto" src="assets/img/shop/footer-cards.png" width="187" alt="Accepted cards">
    </div>
    </div>
    <div class="pt-5 pt-lg-0"></div>
    </footer>--> --}}
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10">
            </circle>
        </svg><i class="ai-arrow-up"></i></a>
    <!-- Vendor scripts: js libraries and plugins-->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="assets/js/theme.min.js"></script>
</body>

</html>