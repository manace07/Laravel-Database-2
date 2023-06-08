<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRISGEM</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
    </head>
    <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img class="img-responsive" src="/images/logo.png" alt="logo"> 
    <a class="navbar-brand" onclick="window.location.href='{{route('productPage')}}'">CrisGem Street Foods</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        @guest 
            <li class="nav-item active">
                <a class="nav-link" onclick="window.location.href='{{route('login')}}'">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="window.location.href='{{route('registration')}}'">Register</a>
            </li>
            <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"> Logout </a>
            </li>
            @else
            
            @endguest
        </ul>
    </div>
</nav>
</header>


