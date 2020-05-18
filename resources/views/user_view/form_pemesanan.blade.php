@extends('user_view.layout.main')


@section('customeheader')
   <link rel="stylesheet" href="{{ asset('dist/frontend/css/sweetalert.css') }}">
   <link rel="stylesheet" href="{{ asset('dist/frontend/css/catalog.css') }}">
   <title>Form Pemesanan - Sneakcare</title>
@endsection


@section('content')
   <div class="container mt-5">
      <h4 class="text-center mb-5">Form Pemesanan</h4>
      <hr>
      @if (session('error'))
        <div class="alert alert-warning" role="alert">
            {{ session('error') }}
        </div>        
      @endif
      <h5 class="text-center">jenis treatment</h5>
      <p class="text-center" style="color: #919191">pilih terlebih dahulu treatment yang kamu inginkan</p>
      <div class="row mb-4">
         <div class="col-md-3 col-sm-6">
             <div class="product-grid6">
                 <div class="product-image6">
                     <a href="">
                         <img class="pic-1" src="{{ asset('dist/frontend/img/fast.png') }}">
                     </a>
                 </div>
                 <div class="product-content">
                     <h3 class="title"><a href="">Fast Clean</a></h3>
                     <div class="price">Rp. 50.000
                     </div>
                 </div>
                 <ul class="social">
                     <li><button id="bFastClean" data-tip="Pilih Treatment"><i class="fa fa-shopping-cart"></i></button></li>
                 </ul>
             </div>
         </div>
         <div class="col-md-3 col-sm-6">
             <div class="product-grid6">
                 <div class="product-image6">
                     <a href="">
                         <img class="pic-1" src="{{ asset('dist/frontend/img/express.png') }}">
                     </a>
                 </div>
                 <div class="product-content">
                     <h3 class="title"><a href="">Express Clean</a></h3>
                     <div class="price">Rp. 180.000
                     </div>
                 </div>
                 <ul class="social">
                     <li><button href="" id="bExpressClean" data-tip="Pilih Treatment"><i class="fa fa-shopping-cart"></i></button></li>
                 </ul>
             </div>
         </div>
         <div class="col-md-3 col-sm-6">
             <div class="product-grid6">
                 <div class="product-image6">
                     <a href="">
                         <img class="pic-1" src="{{ asset('dist/frontend/img/deep.png') }}">
                     </a>
                 </div>
                 <div class="product-content">
                     <h3 class="title"><a href="">Deep Clean</a></h3>
                     <div class="price">Rp. 150.000
                     </div>
                 </div>
                 <ul class="social">
                     <li><button href="" id="bDeepClean" data-tip="Pilih Treatment"><i class="fa fa-shopping-cart"></i></button></li>
                 </ul>
             </div>
         </div>
         <div class="col-md-3 col-sm-6">
             <div class="product-grid6">
                 <div class="product-image6">
                     <a href="">
                         <img class="pic-1" src="{{ asset('dist/frontend/img/repainting.png') }}">
                     </a>
                 </div>
                 <div class="product-content">
                     <h3 class="title"><a href="">Canvas Repainting</a></h3>
                     <div class="price">Rp. 100.000
                     </div>
                 </div>
                 <ul class="social">
                     <li><button href="" id="bCanvasRepainting" data-tip="Pilih Treatment"><i class="fa fa-shopping-cart"></i></button></li>
                 </ul>
             </div>
         </div>
      </div>
      {{---------------------------------------------------------------------------------------------}}
      <hr class="mb-4">
      <h5 class="text-center">checkout pemesanan</h5>
      <div class="row mb-5 mt-5">
        <div class="col-md-6 mx-auto mb-3">
            <p class="text-center" style="color: #919191">konfirmasi treatment</p>
            <div class="mt-5">
                <h4>Harga Treatment: <i class="float-right mr-5">50000</i></h4>
                <h4>Biaya Antar: <i class="float-right mr-5">10000</i></h4>
                <hr>
                <h4>Total: <i class="float-right mr-5">10000</i></h4>
                {{-- <p class="mt-5 mr-5" style="color: #919191">*pastikan jenis treatment dipilih dan form diisi, jika berhasil maka anda akan diarahkan ke halaman utama</p> --}}
            </div>
        </div>
        <div class="col-md-6 mx-auto">
           <form action="{{ url('/user/formsubmitpemesanan') }}" method="POST">
               @csrf
               <p class="text-center" style="color: #919191">dan isi form berikut</p>
               <input id="treatmentinput" type="hidden" name="id_treatment" required>
               <input id="userinput" type="hidden" name="id_user" required>
               <div class="form-group">
                  <div class="input-group flex-nowrap">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                     </div>
                     <input name="jenis_sepatu" type="text" placeholder="Masukan Jenis Sepatu" class="form-control" required>
                  </div>       
               </div>
               <div class="form-group">
                  <div class="input-group flex-nowrap">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-sort-numeric-up"></i></span>
                     </div>
                     <input name="ukuran_sepatu" type="text" placeholder="Ukuran Sepatu" class="form-control" required>
                  </div>       
               </div>
               <div class="form-group">
                  <div class="input-group flex-nowrap">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                     </div>
                     <input name="alamat_pengambilan" type="text" placeholder="Alamat Lengkap Pengambilan" class="form-control" required>
                  </div>       
               </div>
               <div class="form-group">
                   <div class="input-group flex-nowrap">
                      <div class="input-group-prepend">
                         <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                      </div>
                      <input name="no_telp" type="number" placeholder="No Telp Customer" class="form-control" required>
                   </div>       
                </div>
               <button id="bSubmit" type="submit" class="btn btn-primary btn-block py-3 rounded-lg mt-5">Pesan Layanan</button>
            </form>
        </div>

     </div>

     
   </div>


@endsection


@section('custom-script')
    <script src="{{ asset('dist/frontend/js/sweetalert.min.js') }}"></script>
    <script>
        const user = {!! json_encode($user) !!};        
        document.getElementById('userinput').value = user.id;
        const session = 'has';

        $("#bFastClean").click(function(event) { 
            $('#treatmentinput').val("1");
            Swal.fire(
                'Good job!',
                'Treatment Fast Clean dipilih',
                'success'
            )
        }); 

        $("#bExpressClean").click(function(event) { 
            $('#treatmentinput').val("2"); 
            Swal.fire(
                'Good job!',
                'Treatment Express Clean dipilih',
                'success'
            )
        }); 

        $("#bDeepClean").click(function(event) { 
            $('#treatmentinput').val("3"); 
            Swal.fire(
                'Good job!',
                'Treatment Deep Clean dipilih',
                'success'
            )
        }); 
        
        $("#bCanvasRepainting").click(function(event) { 
            $('#treatmentinput').val("4"); 
            Swal.fire(
                'Good job!',
                'Treatment Canvas Repainting dipilih',
                'success'
            )
        }); 
        
    </script>
    <script src="{{ asset('dist/frontend/js/custom.js') }}"></script>
@endsection