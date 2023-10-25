<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar_content">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <ul class="menu">
                <li class="active">
                    <a href="{{ route("home") }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route("motorList") }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Motos</span>
                    </a>
                </li>
                <li>
                    <a href="{{route("loanList")}}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Locations</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <span>Parametres</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="{{ route("signOut") }}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Déconnexion</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="header">
            <div class="header_left">
                <span>Hello !</span>
                <h2>Pseudo</h2>
            </div>
            <div class="header_right">
                <div class="header_right_search">
                    <i class="fa-solid fa-search"></i>
                    <input class="form-control" type="text" placeholder="Search">
                </div>
                <div class="header_right_icon">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
        </div>

        @yield('content')
    </div>
</body>

</html>
