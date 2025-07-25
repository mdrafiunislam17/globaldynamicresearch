<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset("uploads/" . $settings["SETTING_SITE_FAVICON"]) }}" type="image/x-icon">
    <title>Admin : : Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        @php
                            $logo = isset($settings['SETTING_SITE_LOGO']) ? $settings['SETTING_SITE_LOGO'] : 'default-logo.png';
                        @endphp

                        <div class="col-lg-6 d-none d-lg-block bg-login-image bg-light"
                            style="background-image: url('{{ asset("uploads/" . $settings["SETTING_SITE_LOGO"]) }}'); background-size: contain; background-repeat: no-repeat; background-position: center; width: 150px; height: 150px;margin-top: 150px !important;">
                        </div>


                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
                                    @if (session()->has("error"))
                                    <div class="text-danger">{{ session("error") }}</div>
                                    @endif
                                </div>
                                <form action="{{ route("login") }}" method="post" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email"></label>
                                        @error("email")
                                        <div class="text-danger ml-2">{{ $message }}</div>
                                        @enderror
                                        <input type="email" class="form-control form-control-user"
                                               id="email" name="email" aria-describedby="emailHelp"
                                               placeholder="Email Address" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="password"></label>
                                        @error('password')
                                        <div class="text-danger ml-2">{{ $message }}</div>
                                        @enderror
                                        <input type="password" name="password" class="form-control form-control-user"
                                               id="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <div class="text-center mt-3">
                                    <a class="small text-primary" href="{{ route('register') }}">Don't have an account? Register Now</a>
                                </div>

                                <small class="text-center mt-5 d-inline-block">Copyright &copy; {{ now()->year }}  | Developed by <a href="#" target="_blank">rafiun</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
