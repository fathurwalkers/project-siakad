<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesbox.in/admin-templates/neon/html/vertical/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 12:52:46 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Neon is a bootstrap, laravel & php admin dashboard template">
    <meta name="keywords"
        content="admin, admin dashboard, admin panel, admin template, admin theme, bootstrap 4, laravel, php, crm, analytics, responsive, sass support, ui kits, web app, clean design">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>@yield('title')</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('neon/images/favicon.ico') }}">

    <!-- Start CSS -->
    <!-- Chartist Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/chartist-js/chartist.min.css">

    <!-- Datepicker CSS -->
    <link href="{{ asset('neon/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('neon/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('neon/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('neon/css/style.css') }}" rel="stylesheet" type="text/css">
    @stack('css-tambahan')
    <!-- End CSS -->

</head>

<body class="xp-vertical">
    <!-- Search Modal -->
    <div class="modal search-modal fade" id="xpSearchModal" tabindex="-1" role="dialog"
        aria-labelledby="xpSearchModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="xp-searchbar">
                        <form>
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                                    aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn" type="submit" id="button-addon2">GO</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start XP Container -->
    <div id="xp-container">

        <!-- Start XP Leftbar -->
        <div class="xp-leftbar">

            <!-- Start XP Sidebar -->
            <div class="xp-sidebar">

                <!-- Start XP Logobar -->
                <div class="xp-logobar text-center">
                    <a href="index-2.html" class="xp-logo"><img src="{{ asset('neon/images/logo.svg') }}"
                            class="img-fluid" alt="logo"></a>
                </div>
                <!-- End XP Logobar -->

                <!-- Start XP Navigationbar -->
                <div class="xp-navigationbar">
                    <ul class="xp-vertical-menu">
                        <li class="xp-vertical-header">Main</li>
                        @yield('sidebar-menu')
                    </ul>
                </div>
                <!-- End XP Navigationbar -->

            </div>
            <!-- End XP Sidebar -->

        </div>
        <!-- End XP Leftbar -->

        <!-- Start XP Rightbar -->
        <div class="xp-rightbar">

            <!-- Start XP Topbar -->
            <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <a class="xp-menu-hamburger" href="javascript:void();">
                                <i class="icon-menu font-20 text-white"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-11 col-lg-11 order-1 order-md-2">
                        <div class="xp-profilebar text-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="xp-search">
                                        <a href="#" class="text-white" data-toggle="modal"
                                            data-target="#xpSearchModal"><i class="icon-magnifier"></i></a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="dropdown xp-message">
                                        <a class="dropdown-toggle text-white" href="#" role="button" id="xp-message"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-speech font-18 v-a-m"></i>
                                            <span class="badge badge-pill bg-success-gradient xp-badge-up">8</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-message">
                                            <ul class="list-unstyled">
                                                <li class="media">
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-0 py-3 text-white text-center font-16">8 New
                                                            Messages</h5>
                                                    </div>
                                                </li>
                                                <li class="media xp-msg">
                                                    <img class="mr-3 align-self-center rounded-circle"
                                                        src="{{ asset('neon/images/topbar/user-message-1.jpg') }}"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5 class="mt-0 mb-1 font-14">Ariel Blue<span
                                                                    class="font-12 f-w-4 float-right">3 min ago</span>
                                                            </h5>
                                                            <p class="mb-0 font-13">Thank you for attending...<span
                                                                    class="badge badge-pill badge-success float-right">2</span>
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="media xp-msg">
                                                    <img class="mr-3 align-self-center rounded-circle"
                                                        src="{{ asset('neon/images/topbar/user-message-2.jpg') }}"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5 class="mt-0 mb-1 font-14">Jammy Moon<span
                                                                    class="font-12 f-w-4 float-right">5 min ago</span>
                                                            </h5>
                                                            <p class="mb-0 font-13">Hey no worries! Trust me...<span
                                                                    class="badge badge-pill badge-success float-right">3</span>
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="media xp-msg">
                                                    <img class="mr-3 align-self-center rounded-circle"
                                                        src="{{ asset('neon/images/topbar/user-message-3.jpg') }}"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5 class="mt-0 mb-1 font-14">Lisa Ross<span
                                                                    class="font-12 f-w-4 float-right">5:25 PM</span>
                                                            </h5>
                                                            <p class="mb-0 font-13">Remedies for colic? i don't...<span
                                                                    class="badge badge-pill badge-success float-right">5</span>
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-0 py-3 text-black text-center font-14">
                                                            <a href="#" class="text-primary">View all</a>
                                                        </h5>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="dropdown xp-notification">
                                        <a class="dropdown-toggle text-white" href="#" role="button"
                                            id="xp-notification" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon-bell font-18 v-a-m"></i>
                                            <span class="badge badge-pill bg-danger-gradient xp-badge-up">3</span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="xp-notification">
                                            <ul class="list-unstyled">
                                                <li class="media">
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-0 py-3 text-white text-center font-16">3 New
                                                            Notifications</h5>
                                                    </div>
                                                </li>
                                                <li class="media xp-noti">
                                                    <div class="mr-3 xp-noti-icon primary-rgba"><i
                                                            class="icon-user-follow text-primary"></i></div>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5 class="mt-0 mb-1 font-14">New user registered</h5>
                                                            <p class="mb-0 font-12 f-w-4">2 min ago</p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="media xp-noti">
                                                    <div class="mr-3 xp-noti-icon success-rgba"><i
                                                            class="icon-basket-loaded text-success"></i></div>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5 class="mt-0 mb-1 font-14">New order placed</h5>
                                                            <p class="mb-0 font-12 f-w-4">8:45 PM</p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="media xp-noti">
                                                    <div class="mr-3 xp-noti-icon danger-rgba"><i
                                                            class="icon-like text-danger"></i></div>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5 class="mt-0 mb-1 font-14">John like your photo.</h5>
                                                            <p class="mb-0 font-12 f-w-4">Yesterday</p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-0 py-3 text-black text-center font-14">
                                                            <a href="#" class="text-primary">View all</a>
                                                        </h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <div class="dropdown xp-userprofile">
                                        <a class="dropdown-toggle" href="#" role="button" id="xp-userprofile"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                                src="assets/images/topbar/user.jpg" alt="user-profile"
                                                class="rounded-circle img-fluid"><span class="xp-user-live"></span></a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-userprofile">
                                            <a class="dropdown-item py-3 text-white text-center font-16"
                                                href="#">Welcome, Admin </a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="icon-user text-primary mr-2"></i> Profile</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="icon-wallet text-success mr-2"></i> Billing</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="icon-settings text-warning mr-2"></i> Setting</a>
                                            <a class="dropdown-item" href="#"><i class="icon-lock text-info mr-2"></i>
                                                Lock Screen</a>
                                            <a class="dropdown-item" href="{{ url('/admin/keluar') }}" onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                {{ __('keluar') }}
                                            </a>

                                            <form id="logout-form" action="{{ url('/admin/keluar') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div>
                <!-- End XP Row -->

            </div>
            <!-- End XP Topbar -->

            <!-- Start XP Breadcrumbbar -->
            <div class="xp-breadcrumbbar">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <h4 class="xp-page-title">Dashboard</h4>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            @yield('main-content')

            <!-- Start XP Footerbar -->
            <div class="xp-footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2020 Neon - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End XP Footerbar -->

        </div>
        <!-- End XP Rightbar -->

    </div>
    <!-- End XP Container -->

    <!-- Start JS -->
    <script src="{{ asset('neon/js/jquery.min.js') }}"></script>
    <script src="{{ asset('neon/js/popper.min.js') }}"></script>
    <script src="{{ asset('neon/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('neon/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('neon/js/detect.js') }}"></script>
    <script src="{{ asset('neon/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('neon/js/sidebar-menu.js') }}"></script>

    <!-- Chartist Chart JS -->
    <script src="{{ asset('neon/plugins/chartist-js/chartist.min.js') }}">
    </script>
    <script src="{{ asset('neon/plugins/chartist-js/chartist-plugin-tooltip.min.js') }}">
    </script>

    <!-- To Do List JS -->
    <script src="{{ asset('neon/js/init/to-do-list-init.js') }}"></script>

    <!-- Datepicker JS -->
    <script src="{{ asset('neon/plugins/datepicker/datepicker.min.js') }}">
    </script>
    <script src="{{ asset('neon/plugins/datepicker/i18n/datepicker.en.js') }}">
    </script>

    <!-- Dashboard JS -->
    <script src="{{ asset('neon/js/init/dashborad.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('neon/js/main.js') }}"></script>
    <!-- End JS -->

    @stack('js-tambahan')

</body>

<!-- Mirrored from themesbox.in/admin-templates/neon/html/vertical/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 12:55:29 GMT -->

</html>