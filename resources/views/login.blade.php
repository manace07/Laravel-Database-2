@extends('welcome')

@section('content')

@include('cdn5')

@if($message = Session::get('success'))

<div class="alert alert-info"> 
    {{ $message }}
</div>

@endif

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="container-5 container-fluid">
    <div class="col">


        <div class="text-center">
            <img src="images/logo.png" alt="crisgem logo" width="100">
        </div>
        <h1 class="text-center">LOGIN</h1>
        <form action="{{ route('welcome.validate_login') }}" method="POST">
            @csrf
            <div class="form-floating form-group">
                <input class="form-control" type="text" id="user" name="username" placeholder="Username" />
                <label for="user">Username</label>
                @if($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="form-floating form-group">
                <input class="form-control" type="password" id="password" name="password" placeholder="Password" />
                <label for="password">Password</label>
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <i class="fa-regular fa-eye" id="show-password"></i>
            </div>

            <div class="form-group text-end">
                <a href="#" target=" _blank" rel="noopener noreferrer">Forgot Password?</a>
            </div>

            <div class="form-group text-center"><input type="submit" value="LOGIN"></div>
            <div><a class="reg nav-link" onclick="window.location.href='{{route('register')}}'">Register</a></div>
</div>
        </form>

        <script>
            let showPassword = document.getElementById("show-password");
            let hidePassword = document.getElementById("password");

            showPassword.onclick = function(){
                if(hidePassword.type == "password"){
                    hidePassword.type = "text";
                }else{
                    hidePassword.type = "password";
                }
            }
        </script>
    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    </div> -->



<!-- <div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card" style="background-color: #e5e5e5;">
            <div class="card-header"> LOGIN </div>
            <div class="card-body"> 
                <form action="{{ route('welcome.validate_login') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email"/>
                        @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                        @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="d-grid max-auto">
                        <button type="submit" class="btn" style="background-color: #451528; color: white;">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

@endsection('content')