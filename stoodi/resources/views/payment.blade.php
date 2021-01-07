<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Stoodi: About Us</title>
</head>
<body background="{{ 'imagersc/about_us.png' }}" style="background-size:100%; background-repeat: no-repeat">
    <div class="container" style="margin-top: 20px; font-size: 20px">
        <div class="row">
            <div class="col">
              <img src="imagersc/stoodi_logo.png" style="height: 60px">
            </div>
        </div>
    </div> 

    <div align="center">
        <div class="card w-25">
            <div class="card-body">
                <h5 class="card-title">Confirm Payment</h5>
                    <div style="text-align: left">
                        <p>Pembayaran ke</p>
                        <h5>Stoodi</h5>
                        <input type="hidden" name="vendor" value="Stoodi"><br>
                        <p>Nominal</p>
                        <h5>Rp 800.000,-</h5>
                        <input type="hidden" name="nominal" value="800000"><br>
                        <p>Nama</p>
                        <h5>{{Auth::user()->name}}</h5>
                        <input type="hidden" name="bank" value="BNI"><br>
                        <p align="center">
                            <a class="btn btn-outline-primary" href="{{ route('logout') }}" style="margin-left: 10px; border-radius: 7px"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('PAY') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="fixed-bottom" style="background-color: #00D2FC">
        <p style="text-align: center">©STOODI 2020</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>