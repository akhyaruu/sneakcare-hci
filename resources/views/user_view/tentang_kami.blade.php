@extends('user_view.layout.main')


@section('customeheader')
  <title>Tentang Kami - Sneakcare</title>
@endsection


@section('content')
   <div class="bg-light py-4">
      <div class="container">
         <img src="{{ asset('dist/frontend/img/logo-transparent.png') }}" class="rounded mx-auto d-block" alt="logo-team" width="250px">
      <div class="row mb-4">
         <div class="col-md-12">
            <p>Sneakcare merupakan website yang menyediakan layanan pencucian sepatu secara online, 
               layanan ini cocok untuk kamu yang sibuk dan tidak punya waktu untuk mencuci sepatu secara mandiri. Segera gunakan
               layanan kami dan dapatkan promo menarik :) 
            </p>
            <p>Sneakcare, don't worry about your sneaker</p>
         </div>
      </div>
      <hr>
      <div class="row">
         <div class="col-md-5">
            <h2 class="display-4 font-weight-light">Meet Our team</h2>
            <p class="font-italic text-muted">tim pada sneakcare terdiri dari empat orang, yaitu</p>
         </div>
      </div>
   
      <div class="row text-center">
         <!-- Team item-->
         <div class="col-xl-3 col-sm-6 mb-3">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('dist/frontend/img/team1.png') }}" width="100" class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm">
            <h5 class="mb-0">Nurul Aini</h5><span class="small text-uppercase text-muted">Founder</span>
            </div>
         </div>
         <!-- End-->
   
         <!-- Team item-->
         <div class="col-xl-3 col-sm-6 mb-3">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('dist/frontend/img/team2.png') }}" width="100" class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm">
            <h5 class="mb-0">Ilham Akhyar</h5><span class="small text-uppercase text-muted">Founder</span>
            </div>
         </div>
         <!-- End-->
   
         <!-- Team item-->
         <div class="col-xl-3 col-sm-6 mb-3">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('dist/frontend/img/team3.png') }}" width="100" class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm">
            <h5 class="mb-0">Heidie Akbar</h5><span class="small text-uppercase text-muted">Founder</span>
            </div>
         </div>
         <!-- End-->
   
         <!-- Team item-->
         <div class="col-xl-3 col-sm-6 mb-3">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('dist/frontend/img/team4.png') }}" width="100" class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm">
            <h5 class="mb-0">Zuyyinatul M.</h5><span class="small text-uppercase text-muted">Founder</span>
            </div>
         </div>
         <!-- End-->
   
      </div>
      </div>
   </div>
@endsection


@section('custom-script')
  <script> 
    const user = {!! json_encode($user) !!};
    let session;
    if(user.hasOwnProperty('information') ){
      // kalau object kosong
      session = 'none';
    } else {
      session = 'has';
    }  
  </script>
  <script src="{{ asset('dist/frontend/js/custom.js') }}"></script>
@endsection