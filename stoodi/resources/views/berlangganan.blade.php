<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Stoodi: Berlangganan</title>
  </head>

  <body background=" {{ 'imagersc/background.png' }}" style="background-size:100%; background-repeat: no-repeat">

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
                    <a class="nav-link" href="{{ url('/bayar') }}" style="color: white">Cara Bayar</a>
                  </li>
                  <li class="nav-item">
                      <a class="btn btn-primary" href="{{ url('/login') }}" role="button" style="font-size: 20px; border-radius: 40px">Login</a>
                  </li>
              </ul>
            </div>
          </div>
      </div>

      <div class="container" style="align-content: center">

        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-sm-10">
              <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Berlangganan</h1>
                <p class="lead">stoodi menyediakan paket sesuai dengan kebutuhan kamu, seusai dengan apa yang ingin kamu dapatkan hingga sesuai dengan jurusan kamu. Pilihlah paket yang kamu mau dengan harga yang telah kami jamin sangat kompetitif.</p>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-sm-10">
              <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Junior</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">Rp.800.000 <small class="text-muted">/ year</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>Aktif hingga 30 Juni 2021 Akses ke semua mata pelajaran dan semua kurikulum</li>
                      <li>Video Belajar</li>
                      <li>Rangkuman Modul Bimbel</li>
                      <li>Kuis & Latihan</li>
                    </ul>
                    <a type="button" class="w-100 btn btn-lg btn-primary" href="{{ '/register' }}">Langganan</a>
                  </div>
                </div>
                </div>
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Middle class</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">Rp.937.000 <small class="text-muted">/ year</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>Aktif hingga 30 Juni 2021 Akses ke semua mata pelajaran dan semua kurikulum</li>
                      <li>Video Belajar</li>
                      <li>Rangkuman Modul Bimbel</li>
                      <li>Kuis & Latihan</li>
                    </ul>
                    <a type="button" class="w-100 btn btn-lg btn-primary" href="{{ '/register' }}">Langganan</a>
                  </div>
                </div>
                </div>
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Senior</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">Rp.999.000 <small class="text-muted">/ year</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>Aktif hingga 30 Juni 2021 Akses ke semua mata pelajaran dan semua kurikulum</li>
                      <li>Video Belajar</li>
                      <li>Rangkuman Modul Bimbel</li>
                      <li>Kuis & Latihan</li>
                    </ul>
                    <a type="button" class="w-100 btn btn-lg btn-primary" href="{{ '/register' }}">Langganan</a>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      {{-- <hr>
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2017-2020 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer> --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

</body>

</html>
