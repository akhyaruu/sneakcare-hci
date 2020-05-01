
@extends('user_view.layout.main')


@section('customeheader')
  <title>Sneakcare</title>
@endsection


@section('content')

  <!-- carousel -->
  <div id="carousel" class="carousel slide mb-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('dist/frontend/img/shoes1.jpg') }}">
        <div class="carousel-caption d-none d-md-block">
          <h5>Ayo Cuci Sepatu!!</h5>
          <p>Temukan perawatan sepatu terbaik anda dengan menggunakan layanan kami</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('dist/frontend/img/shoes2.jpg') }}">
      <div class="carousel-caption d-none d-md-block">
        <h5>Promo Bulan Ramadhan</h5>
        <p>Cuci 3 pasang gratis 1 pasang</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('dist/frontend/img/shoes3.jpg') }}">
      <div class="carousel-caption d-none d-md-block">
        <h5>#StayHome</h5>
        <p>Kamu tetap aja dirumah, biar kami yang menjemput sepatu kamu</p>
      </div>
    </div>
  </div>
  <a href="#carousel" class="carousel-control-prev" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a href="#carousel" class="carousel-control-next" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  </div>
  <!-- carousel akhir -->


  <!-- container -->
  <div class="container">
  <!-- isi1 -->
      <div class="row w-75 mx-auto">
         <div class="col-md">
            <img src="{{ asset('dist/frontend/img/coach.png') }}" class="ml-5" width="160px">
         </div>
         <div class="col-md">
            <h3 class="font-weight-bold">Place to clean your shoes</h3>
            <p>kamu cukup melakukan pemesanan secara online dan kami akan menjemput sepatu kamu dengan cepat</p>
            Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
         </div>
      </div>

      <div class="row mt-5 w-75 mx-auto">
         <div class="col-md order-2 order-md-12">
            <h3 class="font-weight-bold">Great service</h3>
            <p>kami selalu memberikan layanan terbaik kepada customer kami, salah satunya yaitu memberikan promo2 menarik</p>
            Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
         </div>
         <div class="col-md mb-5 order-1 order-md-12">
            <img src="{{ asset('dist/frontend/img/jobs.png') }}" class="ml-5" width="145px">
         </div>
      </div>

      <div class="row mt-5 w-75 mx-auto">
         <div class="col-md">
            <img src="{{ asset('dist/frontend/img/signaling.png') }}" class="ml-5" width="145px">
         </div>
         <div class="col-md">
            <h3 class="font-weight-bold">Affordable price</h3>
            <p>layanan kami memiliki harga yang relatif terjangkau</p>
            Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
         </div>
      </div>
  </div>
  <!-- container akhir -->


  <!-- Footer -->
  <footer class="font-small mt-5" style="background-color: #8264af">
    <div class="text-center py-3 text-white" style="background-color: #563D7C">© 2020 Copyright Sneakcare</div>
  </footer>
  <!-- Footer Akhir-->

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

