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
                        <a class="nav-link" href="{{ url('/testimoni') }}" style="color: white">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('/login') }}" role="button" style="font-size: 20px; border-radius: 40px">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="container" style="margin-left: 5%; width: 40%; margin-top: 15%">
        <h1 style="text-align: center">study with</h1>
        <h1 style="font-family: sans-serif; font-weight: 900; font-size: 60px; text-align: center">STOODI</h1><br>
        <h3>Apa itu Stoodi?</h3>
        <p>Stoodi adalah situs e-learning untuk siswa sekolah dapat mengembangkan ilmu pengetahuan dan kemampuan. Dalam Stoody terdapat materi dan soal lengkap sesuai 
            dengan kurikulim nasional yang berlaku. Berlangganan sekarang dan dapatkan akses penuh ke seluruh soal dan materi dalam Stoodi.</p><br>
        <p align="center">
            <a class="btn btn-primary" href="{{ '/berlangganan' }}" role="button" style="font-size: 25px; border-radius: 50px; font-weight: 500; width: 250px;">Daftar Sekarang!</a>
        </p>
    </div>

    <div class="container" style="margin-top: 13%">
        <h1 style="text-align: center">Kenapa harus Stoodi?</h1><br>
        <div class="card-deck">
            <div class="card">
              <img src="{{ 'imagersc/feata.jpg' }}" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center">Materi lebih teratur</h5>
                <p class="card-text">Kami memantau secara langsung supaya materi dalam stoody tetap sesuai dengan target tang diharapkan. 
                    Selain itu kami menjaga kualitas soal sesuai dengan materi yang diajarkan</p>
              </div>
            </div>
            <div class="card">
              <img src="{{ 'imagersc/featb.jpg' }}" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center">Mudah diakses dimanapun</h5>
                <p class="card-text">Situs Stoody didesain lebih fleksibel dan dirancang untuk dapat terhubung dengan satu akun utama dalam
                    Single Sign On sehingga lebih memudahkan pengguna untuk mengakses situs kami.
                </p>
              </div>
            </div>
            <div class="card">
              <img src="{{ 'imagersc/featc.jpg' }}" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center">Pengajar professional</h5>
                <p class="card-text">Kami memilih tenaga pengajar professional untuk membantu kami dalam merancang dan menyampaikan materi 
                    kepada pengguna. Dengan tenaga pengajar professional dapat menjamin kualitas dari materi dan soal-soal kami.
                </p>
              </div>
            </div>
          </div>
    </div>

    <div class="container" style="margin-top: 50px; height: 200px;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h2 style="font-family: serif; font-style: oblique; text-align: center">"Kalau mau menunggu sampai siap, kita akan 
                        menghabiskan sisa hidup kita hanya untuk menunggu."</h2>
                    <h5 style="font-family: serif; font-style: oblique; text-align: center; color: gray">-Lemony Snicket-</h5>
                </div>
                <div class="carousel-item">
                    <h2 style="font-family: serif; font-style: oblique; text-align: center">"Pendidikan merupakan tiket untuk masa depan. 
                        Hari esok untuk orang-orang yang telah mempersiapkan dirinya hari ini."</h2>
                    <h5 style="font-family: serif; font-style: oblique; text-align: center; color: gray">-Malcolm X-</h5>
                </div>
                <div class="carousel-item">
                    <h2 style="font-family: serif; font-style: oblique; text-align: center">"Semakin aku banyak membaca, semakin aku banyak 
                        berpikir, semakin aku banyak belajar, semakin aku sadar bahwa aku tak mengetahui apa pun."</h2>
                    <h5 style="font-family: serif; font-style: oblique; text-align: center; color: gray">-Voltaire-</h5>
                </div>
            </div>
          </div>
    </div>

    <div style="background-color: #00D2FC">
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