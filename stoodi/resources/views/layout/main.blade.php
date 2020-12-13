<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Stoodi : @yield('title')</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #1e88e5; height: 72px;">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <img src="web.pict/stoodi.png" style="max-height: 45px;">
                    </li>
                </ul>
                <span class="navbar-text">
                    <ul class="navbar-nav mr-auto" style="font-size: 18px;">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Berlangganan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang Kami</a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>
    
    <div class="container">
        @yield('body')
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>