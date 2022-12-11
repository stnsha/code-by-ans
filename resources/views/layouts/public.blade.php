<!DOCTYPE html>
<html lang="en" class="dark-mode">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <meta name="theme-color" content="white">
    <!-- Theme mode-->
    {{-- <script>
        let mode = window.localStorage.getItem('mode'),
        root = document.getElementsByTagName('html')[0];
      if (mode !== undefined && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
    </script> --}}
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

        .bg-orange {
            background-color: #D38F52;
        }

        .fs-small {
            font-size: 14px;
        }

        .bg-beginner {
            background-color: #A93372;
        }

        .bg-intermediate {
            background-color: #A94A33;
        }

        .bg-advanced {
            background-color: #A93347;
        }

        /* The actual timeline (the vertical ruler) */
        .main-timeline {
            position: relative;
        }

        /* The actual timeline (the vertical ruler) */
        .main-timeline::after {
            content: "";
            position: absolute;
            width: 6px;
            background-color: black;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        /* Container around content */
        .timeline {
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        /* The circles on the timeline */
        .timeline::after {
            content: "";
            position: absolute;
            width: 25px;
            height: 25px;
            right: -13px;
            background-color: black;
            border: 5px solid #f5df4d;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        /* Place the container to the left */
        .left {
            padding: 0px 40px 20px 0px;
            left: 0;
        }

        /* Place the container to the right */
        .right {
            padding: 0px 0px 20px 40px;
            left: 50%;
        }

        /* Add arrows to the left container (pointing right) */
        .left::before {
            content: " ";
            position: absolute;
            top: 18px;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }

        /* Add arrows to the right container (pointing left) */
        .right::before {
            content: " ";
            position: absolute;
            top: 18px;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        /* Fix the circle for containers on the right side */
        .right::after {
            left: -12px;
        }

        /* Media queries - Responsive timeline on screens less than 600px wide */
        @media screen and (max-width: 600px) {

            /* Place the timelime to the left */
            .main-timeline::after {
                left: 31px;
            }

            /* Full-width containers */
            .timeline {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            /* Make sure that all arrows are pointing leftwards */
            .timeline::before {
                left: 60px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }

            /* Make sure all circles are at the same spot */
            .left::after,
            .right::after {
                left: 18px;
            }

            .left::before {
                right: auto;
            }

            /* Make all right containers behave like the left ones */
            .right {
                left: 0%;
            }
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
            <div class="container">
                <img src="{{ asset('assets/img/logo/ans-horizontal-logo.png') }}" width="450px" alt="">
                {{-- <a class="navbar-brand pe-sm-3" href="{{ route('admin.dashboard') }}"><span
                        class="text-primary flex-shrink-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="32" viewBox="0 0 640 512">
                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M64 96c0-35.3 28.7-64 64-64H512c35.3 0 64 28.7 64 64V352H512V96H128V352H64V96zM0 403.2C0 392.6 8.6 384 19.2 384H620.8c10.6 0 19.2 8.6 19.2 19.2c0 42.4-34.4 76.8-76.8 76.8H76.8C34.4 480 0 445.6 0 403.2zM281 209l-31 31 31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM393 175l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z" />
                        </svg></span>Code by ANS</a> --}}
                <div>
                    <a href="{{ route('auth.login') }}" class="btn btn-outline-primary rounded-2 fs-sm"
                        type="button">Login</a>
                </div>
                {{-- <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto">
                    <input class="form-check-input" type="checkbox" id="theme-mode" checked>
                    <label class="form-check-label" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
                    <label class="form-check-label" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
                </div> --}}
            </div>
        </header>
        <!-- Page content-->
        <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
            <div class="row pt-sm-2 pt-lg-0">
                <!-- Page content-->
                <div class="col-lg-12 pt-4 pb-2 pb-sm-4">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Divider for dark mode only-->
        <hr class="d-none d-dark-mode-block">
    </main>
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