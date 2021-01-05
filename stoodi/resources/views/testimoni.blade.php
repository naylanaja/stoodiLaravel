<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Stoodi: Testimoni</title>

    
</head>
<body background="{{ 'imagersc/background.png' }}" style="background-size:100%; background-repeat: no-repeat">
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
                        <a class="btn btn-primary" href="#" role="button" style="font-size: 20px; border-radius: 40px">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 50px; align-content: center">
      
      <!--carousel-->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ 'imagersc/carousel1.png' }}" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{ 'imagersc/carousel2.png' }}" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{ 'imagersc/carousel3.png' }}" class="d-block w-100" alt="">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </a>
      </div> 
      <!--carousel-->
      <br><br>

      <!--card student-->
      <img src="{{ 'imagersc/student-head.png' }}" style="width: 100%;">
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card">
            <img src="{{ 'imagersc/student-1.png' }}" class="card-img-top" alt="">
            <div class="card-body">
              <h4 class="card-title"><b>Naja</b></h5>
              <h6 class="card-subtitle mb-2 text-muted">18 tahun</h6>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ 'imagersc/student-2.png' }}" class="card-img-top" alt="">
            <div class="card-body">
              <h4 class="card-title"><b>Naja</b></h5>
              <h6 class="card-subtitle mb-2 text-muted">18 tahun</h6>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ 'imagersc/student-3.png' }}" class="card-img-top" alt="">
            <div class="card-body">
              <h4 class="card-title"><b>Naja</b></h5>
              <h6 class="card-subtitle mb-2 text-muted">18 tahun</h6>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ 'imagersc/student-4.png' }}" class="card-img-top" alt="">
            <div class="card-body">
              <h4 class="card-title"><b>Naja</b></h5>
              <h6 class="card-subtitle mb-2 text-muted">18 tahun</h6>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
      <!--card student-->
      <br><br>

      <!--card teacher-->
      <img src="{{ 'imagersc/teacher-head.png' }}" style="width: 100%;">
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card">
            <img src="{{ 'imagersc/teacher-1.png' }}" class="card-img-top" alt="">
            <div class="card-body">
              <h4 class="card-title"><b>Naja</b></h5>
              <h6 class="card-subtitle mb-2 text-muted">guru biologi</h6>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ 'imagersc/teacher-2.png' }}" class="card-img-top" alt="">
            <div class="card-body">
              <h4 class="card-title"><b>Naja</b></h5>
              <h6 class="card-subtitle mb-2 text-muted">guru fisika</h6>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ 'imagersc/teacher-3.png' }}" class="card-img-top" alt="">
            <div class="card-body">
              <h4 class="card-title"><b>Naja</b></h5>
              <h6 class="card-subtitle mb-2 text-muted">guru ekonomi</h6>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ 'imagersc/teacher-4.png' }}" class="card-img-top" alt="">
            <div class="card-body">
              <h4 class="card-title"><b>Naja</b></h5>
              <h6 class="card-subtitle mb-2 text-muted">guru sosial</h6>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
      <!--card teacher-->
      <br><br>
      <!--daftar sekarang-->
      <div class="card bg-transparent text-dark">
        <img src="{{ 'imagersc/poster-daftar.png' }}" class="card-img" alt="...">
        <div class="card-img-overlay">
          <br><br><br><br><br><br><br><br><br>
          <h5 class="card-title">Ayo bergabung dengan ribuan siswa lain nya di stoodi ....</h5>
          <a type="button" class="btn btn-primary btn-lg" href="{{ '/berlangganan' }}">Daftar Sekarang !</a>
        </div>
      </div>
      <!--daftar sekarang-->
      <br><br>
    </div>

    {{-- <div class="fixed-bottom" style="background-color: #00D2FC">
        <p style="text-align: center">©STOODI 2020</p>
    </div> --}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


</body>
</html>