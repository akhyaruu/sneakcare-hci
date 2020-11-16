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
                  <button class="btn btn-danger float-right">Hapus</button>
                  <button type="submit" class="btn btn-warning">Konfirmasi Pesanan</button>
               </form>
             </div>
           </div>
         </div>
         @endforeach
       </div>

   </div>
</div>
@endsection