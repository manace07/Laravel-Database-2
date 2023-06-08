@extends('welcome')
@section('content')
@include('cdn4')
@yield('content')

<div class="container-3 d-flex container-fluid justify-content-center align-items-center">
    <!-- Login container -->
    <div class="row border rounded-1 p-3 shadow box-area" style="background: #fff">
        <!-- Left container -->
        <div class="col-md-4 d-flex justify-content-center align-items-center flex-column left-box">
            <div class="logo-box text-center">
                <img src="images/logo.png" alt="crisgem_logo" class="img-fluid" style="width: 250px" />
                <h5 class="mt-3">REGISTER</h5>
                <p>Fill out this form</p>
            </div>
        </div>

        <!-- Right container -->
        <div class="right-box col-md-8">
            <div class="row align-items-center">
                <form action="{{ route('registration.submit') }}" method="POST">
                    @csrf

                    <div class="form-floating form-group">
                        <input class="form-control" type="text" name="username" id="user" placeholder="username" required />
                        <label for="user">Username <span>*</span> </label>
                    </div>

                    <div class="form-floating form-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="email" required />
                        <label for="email">Email <span>*</span> </label>
                    </div>

                    <div class="form-floating form-group">
                        <input class="form-control" type="email" name="email_confirmation" id="conemail" placeholder="email" required />
                        <label for="conemail">Confirm Email <span>*</span> </label>
                    </div>

                    <div class="form-floating form-group">
                        <input class="form-control" type="password" name="password" id="password" placeholder="password" required />
                        <label for="password">Password <span>*</span> </label>
                        <i class="fa-regular fa-eye" id="show-password"></i>
                    </div>

                    <div class="form-floating form-group">
                        <input class="form-control" type="password" name="password_confirmation" id="conpass" placeholder="conpass" required />
                        <label for="conpass">Confirm Password <span>*</span> </label>
                        <i class="fa-regular fa-eye" id="show_password"></i>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" value="REGISTER" />
                    </div>
                    <div><a class="reg nav-link" onclick="window.location.href='{{ route('login') }}'">Log In</a></div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let showPassword = document.getElementById("show-password");
        let hidePassword = document.getElementById("password");

        showPassword.onclick = function () {
            if (hidePassword.type == "password") {
                hidePassword.type = "text";
            } else {
                hidePassword.type = "password";
            }
        };
    </script>
    <script>
        let revPassword = document.getElementById("show_password");
        let hidPassword = document.getElementById("conpass");

        revPassword.onclick = function () {
            if (hidPassword.type == "password") {
                hidPassword.type = "text";
            } else {
                hidPassword.type = "password";
            }
        };
    </script>
</div>
@endsection
