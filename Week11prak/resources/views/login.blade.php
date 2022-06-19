<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: #CDD3CE">
     <div class="container-fluid mt-4 p-5 row d-flex justify-content-center align-items-end h-100"><br>
         <div class="col-md-4 col-md-offset-4">
             <h2 class="text-center"><b>Login</b><br>Data Pemrograman Berbasis Web</h3>
             @if (session('alertout'))
                 <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                     <strong>{{session('alertout') }}</strong>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden-"true">&times;</span>
                     </button>
                 </div>
                 @endif
                 <hr>
                 
                 <form action="/user/ceklogin" method="post">
                     @csrf
                     <div class="form-group">
                         <label>No Handphone</label>
                         <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Handphone"
                             required="">
                     </div>
                     <div class="form-group">
                         <label>Password</label>
                         <input type="password" name="password" class="form-control" placeholder="Password" required="">
                     </div>
                     <button type="submit" class="btn btn-block" style="background-color: #BBB5BD">Log In</button>
                     <hr>
                     <p class="text-center">Belum punya akun? <a href="#">Register</a> sekarang!</p>
                 </form>
         </div>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>