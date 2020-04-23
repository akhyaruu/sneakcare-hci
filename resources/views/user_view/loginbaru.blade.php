<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('dist/frontend/css/bootstrap.css') }}">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('dist/backend/plugins/fontawesome-free/css/all.min.css') }}">
   <title>Masuk akun - Sneakcare</title>
</head>
<body>
   <div class="container">
      <nav class="navbar navbar-default">
      <div  class="">
         <img class="img-circle" src="{{ asset('dist/frontend/img/logo.png') }}" width="220px">
      </div>
      </nav>
      <br>
      <h4 class="text-center">Welcome to SNEAKCARE</h4>
      <br>
      <form>
      <div class="form-group">
         <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="far fa-envelope"></i></div>
          </div>
          <input type="text" name="" class="form-control" placeholder="Your E-mail">   
        </div>       
      </div>
        <div class="form-group">

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="far fa-unlock-alt"></i></div>
            </div>
              <input type="password" name="" class="form-control" placeholder="Password">
            </div>
          </div>

        <button  type="submit" class="btn btn-primary">MASUK</button>
        </form>
        <br>
        <h6 class="text-center">ATAU</h6>
        <br>

        <div class="Media">
                <form class="form-group">

                  <div class="row">

                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fab fa-google"></i></div>
                    </div>

                    <div class="col-lg-5">
                      <input type="text" name="" class="form-control" placeholder="Login with Google">
                    </div>

                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                    </div>

                    <div class="col-lg-5">
                      <input type="text" name="" class="form-control" placeholder="Login with Facebook">
                    </div>

                  </div>
                </form>
        </div>
</body>
</html>