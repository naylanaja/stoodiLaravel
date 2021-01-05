<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Home</title>
</head>
<body background="{{ 'imagersc/landing_bg.png' }}" style="background-size:100%; background-repeat: no-repeat">
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
                                    <img src ="{{'/imagersc/profpict.png'}}" style="width: 100px">
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

        <div class="container mt-5" style="font-weight:bold;font-family:sans-serif">
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
                <br>
                <br>
                {{ Auth::user()->name }}
                <br>
                Status: Siswa
            </p>
        </div>

        <div class="container ">
        <form action="/student/editprofile/update" enctype="multipart/form-data" method="POST">
        
        {{ csrf_field() }}
            <div class="mb-3">
                <label for="formFile" class="form-label">Edit Foto Profil</label>
                <input class="form-control w-50" type="file" name="gambar" id="formFile">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control w-50" type="text" id="formFile" name="email" value="{{ Auth::user()->email }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input class="form-control w-50" type="text" id="formFile" name="name" value="{{ Auth::user()->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>