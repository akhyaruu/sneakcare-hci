@extends('admin_view.layout.main')


@section('content')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar Pesanan</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                 <li class="breadcrumb-item"><a href="">Home</a></li>
                 <li class="breadcrumb-item active">Daftar Pesanan</li>
               </ol>
             </div>
         </div>
      </div>
      @if (session('message'))
         <div class="alert alert-success" role="alert">
            {{ session('message') }}
         </div>
      @endif
   </div>
   <div class="content">

      <div class="row mt-3">
         @foreach ($orders as $order)
         <div class="col-sm-6">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title mb-2 font-weight-bold">{{ $order->jenis_treatment }}</h5>
               <p class="card-text h-auto">{{ $order->nama }} | {{ $order->alamat_pengambilan }}</p>
               <form action="{{ url('/dashboard-admin-sneakcare/konfirmasi-pesanan') }}" method="POST">
                  @csrf
                  <input hidden type="text" name="isi_notifikasi" value="pesanan {{ $order->jenis_treatment }} telah dikonfirmasi">
                  <input hidden type="number" name="id_user" value="{{ $order->id }}">
                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#konfirmasiModal">Konfirmasi Pesanan</button>
               </form>
               {{-- <button href="" class="btn btn-danger float-right">Hapus</button> --}}
             </div>
           </div>
         </div>

         <!-- Modal Konfirmasi Pesanan -->
         {{-- <div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pesanan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  Apakah kamu yakin untuk mengkonfirmasi pesanan ini?
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                  <form action="{{ url('/dashboard-admin-sneakcare/konfirmasi-pesanan') }}" method="POST">
                     @csrf
                     <input hidden type="text" name="isi_notifikasi" value="pesanan {{ $order->jenis_treatment }} telah dikonfirmasi">
                     <input hidden type="number" name="id_user" value="{{ $order->id }}">
                     <button type="submit" class="btn btn-primary">Ya, konfirmasi pesanan</button>
                  </form>
               </div>
            </div>
            </div>
         </div> --}}
         @endforeach
       </div>

       

   </div>
</div>
@endsection