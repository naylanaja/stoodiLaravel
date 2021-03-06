<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <title>Stoodi : @yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #00D2FC; max-height: 72px;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/classroom') }}">
            <img src="{{ '/imagersc/stoodi_logo.png' }}" style="max-height: 45px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex" style="margin-left: auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif

                        @else
                        <div class="nav-item dropdown">
                            <div>
                            <?php
                                if ( Auth::user()->gambar  == NULL ){
                                    ?>
                                    <img src ="{{'/imagersc/profpict.png'}}" style="width: 40px; height: 40px;">
                                    <?php
                                }else{
                                ?>
                                    <img src="/img/{{ Auth::user()->gambar }}" style="width:40px;height:40px;border-radius:100%">
                                <?php
                                }
                                ?>
                                
                                <a class="btn btn-outline-dark btn-sm" href="{{ route('logout') }}" style="margin-left: 10px; border-radius: 7px"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-3">
                <div class="card" style="background-color: white; border-radius: 10px;">
                    <nav class="nav flex-column">
                        <br>
                        <p align="center">
                        <?php
                            if ( Auth::user()->gambar  == NULL ){
                                ?>
                                <img src ="{{'/imagersc/profpict.png'}}" style="width: 100px">
                                <?php
                            }else{
                            ?>
                                <img src="/img/{{ Auth::user()->gambar }}" style="width:100px;height:100px;border-radius:100%">
                            <?php
                            }
                            ?>
                        </p>
                        <h5 align="center">{{ Auth::user()->name }}</h5>
                        <p align="center">{{ Auth::user()->kelas . '-' . Auth::user()->peminatan }}</p>
                        <br>
        
                        <h6 style="margin-left: 15px">Menu</h6>
                        <a class="nav-link" href="{{ url('/profile') }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">account_circle</span>Profile</a>
                        <a class="nav-link" href="{{ url('/classroom') }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">menu_book</span>All Courses</a>
                        <a class="nav-link" href="{{ url('/announcement') }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">campaign</span>Announcement</a>
                    </nav>
                </div><br>
                @yield('info')
            </div>
            <div class="col-9">
                @yield('body')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>