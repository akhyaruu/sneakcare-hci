@extends('user_view.layout.main')


@section('customeheader')
   <link rel="stylesheet" href="{{ asset('dist/frontend/fontawesome/css/all.min.css') }}">
   <title>Masuk akun - Sneakcare</title>
@endsection


@section('content')

   <div class="container mt-5">
      <div class="col-md-5 mx-auto">
         <h4 id="coba" class="text-center">Masuk Akun</h4>
         <p class="mb-5 text-center" style="color: #919191">Untuk dapat melakukan pemesanan</p>
         <form action="{{ url('/user/login') }}" method="POST">
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
            <div>
               <label><a href="{{ url('/register') }}" style="text-decoration: none">tidak punya akun?</a></label>
            </div>
            <button type="submit" class="btn btn-primary btn-block py-3 rounded-lg mt-4">Masuk Akun Saya</button>
         </form>
      </div>
   </div>

@endsection


@section('custom-script')
   <script>
      const session = {!! json_encode($value) !!};

      // parent element
      const parent = document.getElementById('navbar-right-asset');

      // child element
      const bLogin = document.getElementById('button-login');
      const bRegister = document.getElementById('button-register');
      const bNamaUser = document.getElementById('button-nama-user');
      const bNotifikasi = document.getElementById('button-notifikasi');

      if(session === 'none') {   // dia belum login >> button login + register ada, button nama + notifikasi belum ada
         console.log(session);
         if(typeof(bLogin) != 'undefined' && bLogin != null && typeof(bRegister) != 'undefined' && bRegister != null) {
            $( "#button-nama-user" ).remove();
            $( "#button-notifikasi" ).remove();
         } else {
            $("#navbar-right-asset").prepend('<a id="button-register" class="nav-item btn text-white ml-md-1" href="{{ url("/register") }}">Daftar</a>');
            $("#navbar-right-asset").prepend('<a id="button-login" class="nav-item btn text-white ml-md-1" href="{{ url("/login") }}">Masuk</a>');
            $( "#button-nama-user" ).remove();
            $( "#button-notifikasi" ).remove();
         }
      } else {                  // dia sudah login >> button login + register tidak ada, button nama + notifikasi ada
         console.log(session);
         if(typeof(bNamaUser) != 'undefined' && bNamaUser != null && typeof(bNotifikasi) != 'undefined' && bNotifikasi != null) {
            $( "#button-login" ).remove();
            $( "#button-register" ).remove();
         } else {
            $("#navbar-right-asset").prepend('<a id="button-notifikasi" class="btn" href="{{ url("/notification") }}"><i class="fas fa-bell" style="color: white"></i></a>');
            $("#navbar-right-asset").prepend('<button id="button-nama-user" class="nav-item btn text-white">Halo, Ilham Akhyar</button>');
            $( "#button-login" ).remove();
            $( "#button-register" ).remove();
         }
      }
      
   </script>
@endsection
