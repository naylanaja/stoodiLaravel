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
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #00D2FC; max-height: 72px">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/admcourse') }}">
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
                                <img src="{{'/imagersc/profpict.png'}}" style="max-width: 40px">
                                
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

    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-3">
                <div class="card" style="background-color: white; border-radius: 10px;">
                    <nav class="nav flex-column">
                        <h5 style="margin-left: 15px; margin-top: 20px">Menu</h5>
                        <a class="nav-link" href="{{ url('/admcourse') }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">menu_book</span>Courses List</a>
                        <a class="nav-link" href="{{ url('/admaddcourse') }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">create_new_folder</span>Add Course</a>
                        <a class="nav-link" href="{{ url('/admuser') }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">contacts</span>User List</a>
                        <a class="nav-link" href="{{ url('/admregister') }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">person_add_alt_1</span>Register Account</a>
                        <a class="nav-link" href="{{ url('/admaddannounce') }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle">person_add_alt_1</span>Add Announcement</a><br>
                    </nav>
                </div>
                <br>
                @yield('info')
            </div>
            <div class="col-9">
                @yield('body')
            </div>
        </div>
    </div>
</body>
</html>