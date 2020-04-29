<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('dist/frontend/css/bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('dist/frontend/fontawesome/css/all.min.css') }}">
   <link rel="icon" href="{{ asset('dist/frontend/img/favicon.png') }}" type="image/x-icon"/>
   @yield('customeheader')
</head>
<body>
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg" style="background: #563D7C">
      <div class="container">
         <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('dist/frontend/img/logobaru.png') }}" width="50px"></a>
         <h5 class="text-white mt-1 mr-3">SNEAKCARE</h5>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{ asset('dist/frontend/img/open-menu-white.png') }}" width="25px">
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div id="navbar-right-asset" class="navbar-nav ml-auto">
               <a id="button-login" class="nav-item btn text-white ml-md-1" href="{{ url('/login') }}">Masuk</a>
               <a id="button-register" class="nav-item btn text-white ml-md-1" href="{{ url('/register') }}">Daftar</a>
               {{-- <button id="button-nama-user" class="nav-item btn text-white">Halo, Ilham Akhyar</button>
               <a id="button-notifikasi" class="btn" href="{{ url('/notification') }}"><i class="fas fa-bell" style="color: white"></i></a> --}}
               <div class="dropdown open mx-auto">
               <button class="btn dropdown-toggle ml-sm-4" style="background-color:darkturquoise;" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Order & Menu</button>
                  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="triggerId">
                     <a class="dropdown-item" href="{{ url('/pemesanan') }}">Order</a>
                     <a class="dropdown-item" href="#">Tentang kami</a>
                     <a class="dropdown-item" href="#">Hubungi kami</a>
                     <a class="dropdown-item" href="#">Galeri</a>
                     <a class="dropdown-item" href="{{ url('/user/forget') }}">Logout</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>
   <!-- navbar akhir -->

   @yield('content')
   
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{ asset('dist/frontend/js/jquery-3.4.1.slim.min.js') }}"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}
  <script src="{{ asset('dist/frontend/js/bootstrap.min.js') }}"></script>

  @yield('custom-script')
  
</body>
</html>