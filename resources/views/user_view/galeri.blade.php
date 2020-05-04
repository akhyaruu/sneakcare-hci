@extends('user_view.layout.main')

@section('customeheader')
   <title>Galeri - Sneakcare</title>
@endsection


@section('content')
<div class="gallery">
   <div class="container mb-5">
      <h4 class="text-center mt-5">Galeri</h4>
      <div class="row mt-4">
         <img src="{{ asset('dist/frontend/img/hci.png') }}" class="col-md-3 mt-3">
         <img src="{{ asset('dist/frontend/img/hci1.png') }}" class="col-md-3 mt-3">
         <img src="{{ asset('dist/frontend/img/hci2.png') }}" class="col-md-3 mt-3">
         <img src="{{ asset('dist/frontend/img/hci3.png') }}" class="col-md-3 mt-3">
      </div>
      <div class="row mt-3">
         <img src="{{ asset('dist/frontend/img/hci.png') }}" class="col-md-3 mt-3">
         <img src="{{ asset('dist/frontend/img/hci1.png') }}" class="col-md-3 mt-3">
         <img src="{{ asset('dist/frontend/img/hci2.png') }}" class="col-md-3 mt-3">
         <img src="{{ asset('dist/frontend/img/hci3.png') }}" class="col-md-3 mt-3">
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