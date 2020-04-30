
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
  <div class="row isi">
    <div class="col-lg">
      <img src="{{ asset('dist/frontend/img/bukti1.png') }}" alt="isi" class="img-fluid">
    </div>
    <div class="col-lg">
      <h3>Ini contoh dari project kami</h3>
      <p>Jadi ini masih coba-coba buat bikin home pagenya.. mudah-mudahan si bagus, tapi masih banyak yang harus di improve sii hehe.. doakan yaa..</p>
    </div>
  </div>
  <!-- isi1 -->
  <div class="row isi1 mt-5">
    <div class="col-lg">
      <h3>Bingung mau nulis apa</h3>
      <p>Ini juga bingung mau nulis apa, jadi aku bikin aja seadanya hehe.. ini harusnya bisa digabungin di row atas, tapi aku gaberani coba-coba wkwk ntar ae tak belajar dulu caranya oke?okee..</p>
    </div>
    <div class="col-lg">
      <img src="{{ asset('dist/frontend/img/bukti1.png') }}" alt="isi1" class="img-fluid">
    </div>
  </div>
  </div>
  <!-- container akhir -->


  <!-- Footer -->
  <footer class="font-small mt-5" style="background-color: #8264af">
    {{-- <!-- Footer Links -->
    <div class="container">
      <!-- Grid row-->
      <div class="row text-center d-flex justify-content-center pt-5 mb-3">
        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="" class="text-dark">Tentang Kami</a>
          </h6>
        </div>
        <!-- Grid column -->
        
        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="" class="text-dark">Hubungi Kami</a>
          </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="" class="text-dark">Bantuan</a>
          </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="" class="text-dark">Galeri</a>
          </h6>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->
      <hr class="rgba-white-light" style="margin: 0 15%;">
      <!-- Grid row-->
      <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
        <!-- Grid column -->
        <div class="col-md-8 col-12 mt-5">
          <p style="line-height: 1.7rem">Sneakcare merupakan layanan jasa pencucian sepatu secara online</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row-->
      <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">
      <!-- Grid row-->
      <div class="row pb-3">
        <!-- Grid column -->
        <div class="col-md-12">
          <div class="mb-5 flex-center">
            
          </div>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row-->
    </div>
    <!-- Footer Links --> --}}

    <!-- Copyright -->
    <div class="text-center py-3 text-white" style="background-color: #563D7C">© 2020 Copyright Sneakcare</div>
    <!-- Copyright -->
  </footer>
  <!-- Footer Akhir-->

  {{-- $('.carousel').carousel({
    interval: 2500,
    keyboard: true,
    pause: 'hover',
    wrap: true
  }); --}}

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

