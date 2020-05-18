
@extends('user_view.layout.main')


@section('customeheader')
  <link rel="stylesheet" href="{{ asset('dist/frontend/css/testi.css') }}">
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
  @if (session('message'))
    <div class="alert alert-success" role="alert">
      {{ session('message') }}
    </div>        
  @endif
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


  <!-- container 1 -->
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
            <img src="{{ asset('dist/frontend/img/signaling.png') }}" class="ml-5 mb-4" width="135px">
         </div>
         <div class="col-md">
            <h3 class="font-weight-bold">Affordable price</h3>
            <p>layanan kami memiliki harga yang relatif terjangkau</p>
            Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
         </div>
      </div>
  </div>


  <!-- container 2 -->
  <div class="container mt-3">
    <hr>
    <div class="row">
      <div class="col-md-8 col-center mt-5 mx-auto">
        <h2 class="text-center mb-4">Testimonials</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>   
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="item carousel-item active">
              <div class="img-box"><img src="{{ asset('dist/frontend/img/boy.png') }}" alt=""></div>
              <p class="testimonial">Abis treatment Repaint Canvas di Sneakcare sepatu jadi kelihatan seperti baru, mantull banget pokoknya dah.</p>
              <p class="overview"><b>Baim Wong</b>, Selebritis</p>
            </div>
            <div class="item carousel-item">
              <div class="img-box"><img src="{{ asset('dist/frontend/img/girl.png') }}" alt=""></div>
              <p class="testimonial">Treatment yang sangat baik, servicenya sangat baik, proses pengantaran cepat.</p>
              <p class="overview"><b>Raisa Adriana</b>, Customer</p>
            </div>
            <div class="item carousel-item">
              <div class="img-box"><img src="{{ asset('dist/frontend/img/student.png') }}" alt=""></div>
              <p class="testimonial">Terima Kasih Sneakcare, sekarang gausah bingung lagi kalau sepatu kotor.</p>
              <p class="overview"><b>Muhammad Anto</b>, Customer</p>
            </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  


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

