@extends('user_view.layout.main')


@section('customeheader')
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

