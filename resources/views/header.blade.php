@include('cdn6')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRISGEM</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" >
   
</head>
<body>
    <div class="nav navbar-vertical">
        <div class="d-flex col-auto">
        <ul class="navbar-nav">
            <li class="nav-item nav-pills flex-column mt-2 mt-sm-0 d-none d-sm-inline" id="menu">
                <img class="img-responsive" src="/images/logo.png" onclick="window.location.href='{{route('dashboard')}}'" alt="logo">
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="window.location.href='{{route('dashboard')}}'"><i class="fs-5 fa fa-gauge"></i> <span class="ms-2 d-none d-sm-inline">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="window.location.href='{{route('expensePage')}}'"><i class="fs-5 fa fa-bag-shopping"></i><span class="ms-2 d-none d-sm-inline">Purchased</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="window.location.href='{{route('productPage')}}'"><i class="fs-5 fa fa-boxes-stacked"></i><span class="ms-2 d-none d-sm-inline">Inventory</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="window.location.href='{{route('salesreport')}}'"><i class="fs-5 fa fa-money-bill-trend-up"></i><span class="ms-2 d-none d-sm-inline">Sales Report</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="window.location.href='{{route('records')}}'"><i class="fs-5 fa fa-clipboard"></i><span class="ms-2 d-none d-sm-inline">Records</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"><i class="fs-5 fa fa-door-open"></i><span class="ms-2 d-none d-sm-inline">Logout</span></a>
            </li>
            <li class="nav-item mt-auto text-wrap">@include('footer')</li>
        </ul>
        </div>
    </div>

    
</body>