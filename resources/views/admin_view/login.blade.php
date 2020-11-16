<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('dist/backend/css/bootstrap.css') }}">
   <title>Login Admin Sneakcare</title>
</head>
<body>
   <div class="container mt-5 pt-2">
      <div id="id-col" class="col-md-5 mx-auto">
         <img class="mx-auto d-block w-50" src="{{ asset('dist/backend/img/logo-transparent.png') }}" alt="logo sneakcare">
         @if (session('error'))
            <div class="alert alert-warning" role="alert">
               {{ session('error') }}
            </div>
         @endif
         @if (session('message'))
            <div class="alert alert-success" role="alert">
               {{ session('message') }}
            </div>
         @endif

         <form id="loginid" action="{{ url('/user/login') }}" method="POST">
            @csrf
            <div class="form-group">
               <div class="input-group flex-nowrap">
                  <div class="input-group-prepend">
                     <span class="input-group-text"><i class="far fa-envelope"></i></span>
                  </div>
                  <input name="email" type="email" class="form-control" placeholder="Alamat E-mail" required>
               </div>       
            </div>
            <div class="form-group">
               <div class="input-group flex-nowrap">
                  <div class="input-group-prepend">
                     <span  span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input name="password" type="password" class="form-control" placeholder="Password" required>
               </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block py-3 rounded-lg mt-4">Masuk Dashboard Admin</button>
         </form>
      </div>
   </div>
</body>
</html>