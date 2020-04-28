@extends('user_view.layout.main')


@section('customeheader')
    <link rel="stylesheet" href="{{ asset('dist/frontend/css/catalog.css') }}">
    <title>Form Pemesanan - Sneakcare</title>
@endsection


@section('content')
   <div class="container mt-5">
      <h4 class="text-center mb-5">Form Pemesanan</h4>
      <hr>
      <h5 class="text-center">jenis treatment</h5>
      <p class="text-center" style="color: #919191">pilih terlebih dahulu treatment yang kamu inginkan</p>
      <div class="row mb-4">
         <div class="col-md-3 col-sm-6">
             <div class="product-grid6">
                 <div class="product-image6">
                     <a href="#">
                         <img class="pic-1" src="{{ asset('dist/frontend/img/fast.png') }}">
                     </a>
                 </div>
                 <div class="product-content">
                     <h3 class="title"><a href="#">Fast Clean</a></h3>
                     <div class="price">Rp. 50.000
                     </div>
                 </div>
                 <ul class="social">
                     <li><a href="" data-tip="Pilih Treatment"><i class="fa fa-shopping-cart"></i></a></li>
                 </ul>
             </div>
         </div>
         <div class="col-md-3 col-sm-6">
             <div class="product-grid6">
                 <div class="product-image6">
                     <a href="#">
                         <img class="pic-1" src="{{ asset('dist/frontend/img/fast.png') }}">
                     </a>
                 </div>
                 <div class="product-content">
                     <h3 class="title"><a href="#">Express Clean</a></h3>
                     <div class="price">Rp. 180.000
                     </div>
                 </div>
                 <ul class="social">
                     <li><a href="" data-tip="Pilih Treatment"><i class="fa fa-shopping-cart"></i></a></li>
                 </ul>
             </div>
         </div>
         <div class="col-md-3 col-sm-6">
             <div class="product-grid6">
                 <div class="product-image6">
                     <a href="#">
                         <img class="pic-1" src="{{ asset('dist/frontend/img/fast.png') }}">
                     </a>
                 </div>
                 <div class="product-content">
                     <h3 class="title"><a href="#">Deep Clean</a></h3>
                     <div class="price">Rp. 150.000
                     </div>
                 </div>
                 <ul class="social">
                     <li><a href="" data-tip="Pilih Treatment"><i class="fa fa-shopping-cart"></i></a></li>
                 </ul>
             </div>
         </div>
         <div class="col-md-3 col-sm-6">
             <div class="product-grid6">
                 <div class="product-image6">
                     <a href="#">
                         <img class="pic-1" src="{{ asset('dist/frontend/img/fast.png') }}">
                     </a>
                 </div>
                 <div class="product-content">
                     <h3 class="title"><a href="#">Canvas Repainting</a></h3>
                     <div class="price">Rp. 100.000
                     </div>
                 </div>
                 <ul class="social">
                     <li><a href="" data-tip="Pilih Treatment"><i class="fa fa-shopping-cart"></i></a></li>
                 </ul>
             </div>
         </div>
      </div>
      
      <div class="row">
        <div class="col-md-5 mx-auto mt-2">
           <form action="" method="POST">
              @csrf
              <p class="text-center" style="color: #919191">lalu isi form berikut</p>
              <div class="form-group">
                 <label for="">Jenis Sepatu</label>
                 <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                       <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                    </div>
                    <input name="email" type="email" class="form-control" required>
                 </div>       
              </div>
              <div class="form-group">
                 <label for="">Ukuran Sepatu</label>
                 <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                       <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input name="email" type="email" class="form-control" required>
                 </div>       
              </div>
              <div class="form-group">
                 <label for="">Alamat Pengambilan</label>
                 <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                       <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input name="email" type="email" class="form-control" required>
                 </div>       
              </div>
              <button type="submit" class="btn btn-primary btn-block py-3 rounded-lg mt-4">Masuk Akun Saya</button>

           </form>
        </div>
     </div>

     
   </div>


@endsection