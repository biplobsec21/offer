<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Offer</title>

    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets_website/css/bootstrap.min.css')}}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets_website/css/owl.theme.default.min.css')}}">

    <!-- Font Awesome CSS -->
    <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Date Dange Picker -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_website/css/daterangepicker.css')}}">

    <!-- Theme Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_website/css/style.css')}}">

    @yield('header_css_js')

</head>

<body>
    @include('website.layouts.header')

    @yield('content')
    @include('website.layouts.footer')
    <!-- JQuery Liberary File -->
    <script src="{{asset('assets_website/js/jquery.min.js')}}"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('assets_website/js/bootstrap.bundle.min.js')}}">
    </script>
    <!-- Owl Carousel JS File -->
    <script src="{{asset('assets_website/js/owl.carousel.min.js')}}"></script>
    <!-- Date Range Picker JS -->
    <script src="{{asset('assets_website/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets_website/js/moment.min.js')}}"></script>
    <script src="{{asset('assets_website/js/jquery.inputmask.min.js')}}"></script>
    <script src="{{asset('assets_website/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('assets_website/js/daterangepicker.js')}}"></script>
    <!-- Theme Main JS File -->
    <script src="{{asset('assets_website/js/main.js')}}"></script>
    <script src="{{asset('assets_website/js/lazysizes.min.js')}}"></script>
    <script src="{{asset('assets_website/js/ls.unveilhooks.min.js')}}"></script>
    @yield('footer_css_js')
    <!-- Login Modal Start -->
    <div class="modal fade login-popup" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <h2 style="color: #881ae7;">Login</h2>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                required="required">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" id="txtPassword" class="form-control"
                                placeholder="Password" required="required">
                            <i id="toggle_pass" class="fa-solid fa-eye"></i>
                        </div>

                        <a href="">forgot your password?</a>

                        <div class="mb-3">
                            <ul class="modal-duelbtn">
                                <li>
                                    <input type="submit" name="login" value="Login" class="btn-modal">
                                </li>
                                <li>
                                    <input type="submit" name="signup" value="Signup" class="btn-modal-second">
                                </li>
                            </ul>

                    </form>

                    <h4 class="title-separator">OR</h4>

                    <ul class="social-login">
                        <li><a href="#"><img src="{{ asset('assets_website/images/modal/apple-icon.png')}}"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login with Apple"></a>
                        </li>
                        <li><a href="#"><img src="{{asset('assets_website/images/modal/google-icon.png')}}"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login with Google"></a>
                        </li>
                        <li><a href="#"><img src="{{asset('assets_website/images/modal/facebook-icon.png')}}"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login with Facebook"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Login Modal End -->


    {{--
    <!-- Signup Modal Start -->
    <div class="modal fade login-popup" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <img src="images/modal/logo-for-popup.png" class="logo-popup">

                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="text" name="name" id="name" class="form-control" placeholder="User name"
                                required="required">
                            <i class="fa-solid fa-user-circle"></i>
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                required="required">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" id="txtPassword" class="form-control"
                                placeholder="Password" required="required">
                            <i id="toggle_pass" class="fa-solid fa-eye"></i>
                        </div>

                        <a href="">forgot your password?</a>

                        <div class="mb-3">
                            <ul class="modal-duelbtn">
                                <li>
                                    <input type="submit" name="login" value="Login" class="btn-modal">
                                </li>
                                <li>
                                    <input type="submit" name="signup" value="Signup" class="btn-modal-second">
                                </li>
                            </ul>

                    </form>

                    <h4 class="title-separator">OR</h4>

                    <ul class="social-login">
                        <li><a href="#"><img src="images/modal/apple-icon.png" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Login with Apple"></a></li>
                        <li><a href="#"><img src="images/modal/google-icon.png" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Login with Google"></a></li>
                        <li><a href="#"><img src="images/modal/facebook-icon.png" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Login with Facebook"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Signup Modal End -->
    --}}





</body>

</html>