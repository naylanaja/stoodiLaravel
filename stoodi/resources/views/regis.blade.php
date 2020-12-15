<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Stoodi: Login</title>
  </head>

  <body background=" {{ 'imagersc/bg-login.jpg' }}" style="background-size:100%; background-repeat: no-repeat">
    
        <div class="container mt-5">
        <div class="card shadow-lg p-3 mb-5 mt-5  rounded"  style="width: 25rem; margin-left:auto; margin-right:auto; border-radius: 3%;background-color:teal">
        <img src=" {{ 'imagersc/stoodi_logo.png' }}" style="width:300px;margin-left:auto;margin-right:auto">
        <div class="card-body ">
        
        <form method="post" action="/login">
        {{csrf_field()}}
                    <fieldset>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kata Sandi</label>
                            <input type="password" class="form-control" name="password">    
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Konfirmasi kata sandi</label>
                            <input type="password" class="form-control" name="confpass">    
                        </div>
                        
                        <p></p>
                            <button type="submit" class="btn btn-primary" >Daftar</button>
                            <a type="button" class="btn btn-danger " href="{{ '/' }}"name="back">Back</a>
                            </fieldset>
                        </form>
    </div>
    </div>
    </div>
            
    
  
    



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