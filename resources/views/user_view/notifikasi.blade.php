@extends('user_view.layout.main')


@section('customeheader')
   <title>Masuk akun - Sneakcare</title>
@endsection


@section('content')
   <div class="container mt-5">
      <div class="col-md-12 mx-auto">
         <h4 class="text-center mb-5">Notifikasi</h4>
         {{-- if (is_array($notifikasi) || is_object($notifikasi)) { --}}
            @foreach ($notifikasi as $notif)
               <div class="card w-75 mx-auto mt-2">
                  <div class="card-body">
                  <p class="card-text">{{ $notif->isi_notifikasi }} <span class="float-right">(Dikonfirmasi pada {{ $notif->updated_at }})</span></p>
                  </div>
               </div>
            @endforeach
         {{-- } --}}
         
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