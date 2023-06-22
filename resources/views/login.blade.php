@extends('welcome')

@section('content')

@include('cdn5')

@if($message = Session::get('success'))

<div class="alert alert-info"> 
    {{ $message }}
</div>

@endif

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="container-fluid bg-light">
    <div class="col">


        <div class="text-center">
            <img src="images/logo.png" alt="crisgem logo" width="100">
        </div>
        <h1 class="text-center display-6">LOGIN</h1>
        <form class="fs-6" action="{{ route('login.validate') }}" method="POST">
            @csrf
            <div class="form-floating form-group">
            <input class="form-control" type="text" id="email" name="email" placeholder="Email" />
            <label for="email">Email</label>
            @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-floating form-group">
                <input class="form-control" type="password" id="password" name="password" placeholder="Password" />
                <label for="password" class="mb-4">Password</label>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <i class="fa-regular fa-eye" id="show-password"></i>
            </div>

            <div class="form-group text-end">
                <a class="fs-6" href="{{ route('password.request') }}" target=" _blank" rel="noopener noreferrer">Forgot Password?</a>
            </div>

            <div class="form-group text-center"><input type="submit" value="LOGIN"></div>
            <div><a class="reg nav-link" onclick="window.location.href='{{ route('register') }}'">Register</a></div>
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



@endsection('content')