<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Stoodi: Berlangganan</title>
</head>
<body background="{{ 'imagersc/about_us.png' }}" style="background-size:100%; background-repeat: no-repeat">
    <div class="container" style="margin-top: 20px; font-size: 20px">
        <div class="row">
            <div class="col">
              <img src="imagersc/stoodi_logo.png" style="height: 60px">
            </div>
            <div class="col">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}" style="color: white">Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/aboutus') }}" style="color: white">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/berlangganan') }}" style="color: white">Berlangganan</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="#" role="button" style="font-size: 20px; border-radius: 40px">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 30px; align-content: center">
        
        <!--poster 1-->
            <img src="{{ 'imagersc/berlangganan-1.png' }}" style="width: 100%">     
        <!--poster 1-->

        <!--card package-->
        <div class="row row-cols-1 row-cols-md-2 g-4">

            <div class="col">
              <div class="card" style="border-radius: 5%;">
                <img src="{{ 'imagersc/package-1.png' }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: bold">Try It Package</h5>
                  <p class="card-text">
                    coba dulu kamu pasti akan suka dengan metode kami, kamu akan belajar bersama kami dalam 1 semester ini kamu akan merasakan bagaimana para pengajar kami memberikan metode terbaik.
                  </p>
                  <div class="d-grid gap-2">
                    <button type="button" class="btn btn-info btn-block">Subscribe</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card"  style="border-radius: 5%;">
                <img src="{{ 'imagersc/package-2.png' }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: bold">Junior Package</h5>
                  <p class="card-text">
                  untuk kamu yang ingin siap dalam menghadapi kelas 10 dan 11 ini lah paket terbaik dari kami dengan bank soal yang update dan juga pengajar yang kompeten.  
                  </p>
                  <div class="d-grid gap-2">
                    <button type="button" class="btn btn-info btn-block">Subscribe</button>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col" style="margin-top: 20px">
              <div class="card" style="border-radius: 5%;">
                <img src="{{ 'imagersc/package-3.png' }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: bold">Senior Package</h5>
                  <p class="card-text">
                    mempersiapkan kelulusanmu di SMA dan mendapatkan nilai terbaik di kelas 12 dengan paket ini seluruh kebutuhanmu selama 1 tahun di SMA akan terpenuhi.
                  </p>
                  <div class="d-grid gap-2">
                    <button type="button" class="btn btn-info btn-block">Subscribe</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col" style="margin-top: 20px">
              <div class="card" style="border-radius: 5%;">
                <img src="{{ 'imagersc/package-4.png' }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: bold">Full Package</h5>
                  <p class="card-text">
                    menemanimu dari awal sma hingga lulus, dengan paket ini kamu tidak hanya mendapatkan latihan di setiap kelas tapi juga mendapatkan latihan soal untuk masuk ke perguruan tinggi.
                  </p>
                  <div class="d-grid gap-2">
                    <button type="button" class="btn btn-info btn-block">Subscribe</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        <!--card package-->
        <br>
        <br>
        <!--poster 2-->
        <img src="{{ 'imagersc/berlangganan-2.png' }}" style="width: 100%">     
        <!--poster 2-->
        
        
        
        {{-- <h1 style="text-align: center; margin-bottom: 60px;">Team Kami</h1>
        <div class="row" align="center">
            <div class="col">
                <img src="{{ 'imagersc/irfanda.jpeg' }}" style="width: 250px; border-radius: 100%"><br><br>
                <h5>IRFANDA WIRA ARNAWAMA</h5>
            </div>
            <div class="col">
                <img src="{{ 'imagersc/kiki.jpeg' }}" style="width: 250px; border-radius: 100%"><br><br>
                <h5>MUHAMMAD RIZKY JUNIANWAR</h5>
            </div>
            <div class="col">
                <img src="{{ 'imagersc/naja.jpeg' }}" style="width: 250px; border-radius: 100%"><br><br>
                <h5>NAYLA NAJA</h5>
            </div>
        </div><br><br>
        <div class="row" align="center">
            <div class="col" style="margin-left: 200px">
                <img src="{{ 'imagersc/rizky.jpeg' }}" style="width: 250px; border-radius: 100%"><br><br>
                <h5>RIZKY FADILAH</h5>
            </div>
            <div class="col" style="margin-right: 200px">
                <img src="{{ 'imagersc/rheza.jpeg' }}" style="width: 250px; border-radius: 100%"><br><br>
                <h5>RHEZA DEWANTARA</h5>
            </div>
        </div> --}}
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