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
            <img src="imagersc/stoodi_logo.png" style="max-height: 45px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" style="margin-left: auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-3">
                <div class="card" style="background-color: white; border-radius: 10px;">
                    <nav class="nav flex-column">
                        <br>
                        <p align="center">
                            <img src="imagersc/profpict.png" style="max-width: 100px">
                        </p>
                        <h6 align="center">Profile Name</h6>
                        <p align="center">Peminatan</p>
                        <br>
        
                        <h6 style="margin-left: 15px">Menu</h6>
                        <a class="nav-link" href="#"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">account_circle</span>Profile</a>
                        <a class="nav-link" href="{{ url('/classroom') }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">menu_book</span>My Course</a>
                        <a class="nav-link" href="#"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">live_help</span>Ask</a>
                        <a class="nav-link" href="#"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">campaign</span>Amnouncement</a>
                        <a class="nav-link" href="#"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">tune</span>Preferences</a><br>
                    </nav>
                </div>
            </div>
            <div class="col-9">
                @yield('body')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>