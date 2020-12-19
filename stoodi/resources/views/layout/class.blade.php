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
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #00D2FC;">
        <div class="container">
            <img src="{{ '/imagersc/stoodi_logo.png' }}" style="max-height: 45px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
           </form>
                                    </li>
        </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-3">
                <div class="card" style="background-color: white; border-radius: 10px;">
                    <nav class="nav flex-column">
                        <br>
                        <p align="center">
                            <img src="{{ '/imagersc/profpict.png' }}" style="max-width: 100px">
                        </p>
                        <h6 align="center">Profile Name</h6>
                        <p align="center">Peminatan</p>
                        <br>

        
                        <h6 style="margin-left: 15px">Menu</h6>
                        <a class="nav-link" href="#">Profile</a>
                        <a class="nav-link" href="#">My Course</a>
                        <a class="nav-link" href="#">Ask</a>
                        <a class="nav-link" href="#">Amnouncement</a>
                        <a class="nav-link" href="#">Preferences</a>
                        
                    </nav>
                </div>
            </div>
            <div class="col-9">
                @yield('body')
            </div>
        </div>
    </div>

    <div class="footer" style="background-color: #30475e; height: 200px; position: relative;">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        One of three columns
                    </div>
                    <div class="col-sm">
                        One of three columns
                    </div>
                    <div class="col-sm">
                        One of three columns
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bootom"
            style="background-color: #222831; height: 30px; width: 100%; text-align: center;position: absolute; bottom: 0px; left: 0px;">
            <div style="color: seashell;">&copy; Stoodi.co.id | Designed by Kelompok 2</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>