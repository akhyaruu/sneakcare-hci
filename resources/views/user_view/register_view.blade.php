@extends('user_view.layout.main')


@section('customeheader')
   <link rel="stylesheet" href="{{ asset('dist/frontend/fontawesome/css/all.min.css') }}">
   <title>Daftar Akun - Sneakcare</title>
@endsection


@section('content')
   <div class="container mt-5">
      <div class="col-md-5 mx-auto">
         <h4 class="text-center mb-5">Daftar Akun Baru</h4>
         <form action="{{ url('/user/register') }}" method="POST">
            @csrf
            <div class="form-group">
               <div class="input-group flex-nowrap">
                  <div class="input-group-prepend">
                     <span class="input-group-text"><i class="far fa-user"></i></span>
                  </div>
                  <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
               </div>       
            </div>
            <div class="form-group">
               <div class="input-group flex-nowrap">
                  <div class="input-group-prepend">
                     <span  span class="input-group-text"><i class="far fa-envelope"></i></span>
                  </div>
                  <input name="email" type="email" class="form-control" placeholder="E-mail" required>
               </div>
            </div>
            <div class="form-group">
               <div class="input-group flex-nowrap">
                  <div class="input-group-prepend">
                     <span  span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                  </div>
                  <input name="no_telp" type="number" class="form-control" placeholder="No Telp" required>
               </div>
            </div>
            <div class="form-group">
               <div class="input-group flex-nowrap">
                  <div class="input-group-prepend">
                     <span  span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input name="password" type="password" class="form-control" placeholder="Password (min. 5 karakter)" required>
               </div>
            </div>
            <div>
               <small style="color: #919191">*dengan ini kamu menyetujui persyaratan dan ketentuan yang berlaku</small>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-block py-3 rounded-lg">Buat Akun</button>
         </form>
      </div>
   </div>
@endsection