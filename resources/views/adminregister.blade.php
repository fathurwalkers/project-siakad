<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesbox.in/admin-templates/neon/html/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 13:01:26 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Neon is a bootstrap, laravel & php admin dashboard template">
    <meta name="keywords"
        content="admin, admin dashboard, admin panel, admin template, admin theme, bootstrap 4, laravel, php, crm, analytics, responsive, sass support, ui kits, web app, clean design">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Neon - Bootstrap + Laravel + PHP Admin Dashboard Template</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Start CSS -->
    <link href="{{ asset('neon/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('neon/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('neon/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End CSS -->

</head>

<body class="xp-vertical">

    <div class="xp-authenticate-bg"></div>
    <!-- Start XP Container -->
    <div id="xp-container" class="xp-container">

        <!-- Start Container -->
        <div class="container">

            <!-- Start XP Row -->
            <div class="row vh-100 align-items-center">
                <!-- Start XP Col -->
                <div class="col-lg-12 ">

                    <!-- Start XP Auth Box -->
                    <div class="xp-auth-box">

                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center mt-0 m-b-15">
                                    <a href="index-2.html" class="xp-web-logo"><img
                                            src="{{ asset('neon/images/logo.svg') }}" height="40" alt="logo"></a>
                                </h3>
                                <div class="p-3">
                                    <form action="" method="post">
                                        @csrf
                                        <div class="text-center mb-3">
                                            <h4 class="text-black">Registrasi User</h4>
                                            <p class="text-muted">Sudah mempunyai akun?
                                                <a href="{{ url('/admin/login') }}">Masuk</a> disini</p>
                                        </div>

                                        {{-- <div class="form-group">
                                            <input type="hidden" name="validasi" class="form-control" id="validasi"
                                                value="1">
                                        </div> --}}

                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" id="email"
                                                placeholder="Masukkan Email..." required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control" id="username"
                                                placeholder="Username..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" id="email"
                                                placeholder="Password..." required>
                                        </div>
                                        <div class="form-group">

                                            <input type="radio" name="level" class="form-control" id="level2" value="1"
                                                required>
                                            <label for="level1">Guru</label>

                                            <input type="radio" name="level" class="form-control" id="level2" value="2"
                                                required>
                                            <label for="level2">Siswa</label>

                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary btn-rounded btn-lg btn-block">Create an
                                            Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End XP Auth Box -->

                </div>
                <!-- End XP Col -->
            </div>
            <!-- End XP Row -->
        </div>
        <!-- End Container -->
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

    <!-- Main JS -->
    <script src="{{ asset('neon/js/main.js') }}"></script>
    <!-- End JS -->

</body>

<!-- Mirrored from themesbox.in/admin-templates/neon/html/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 13:01:26 GMT -->

</html>