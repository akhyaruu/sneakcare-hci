@extends('admin_view.layout.main')


@section('content')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar Order</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                 <li class="breadcrumb-item"><a href="">Home</a></li>
                 <li class="breadcrumb-item active">Daftar Order</li>
               </ol>
             </div>
         </div>
      </div>
   </div>
   <div class="content">

      {{-- <a href="/dashboard/post/create" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Portofolio Baru</a> --}}
      <div class="row mt-3">
         @foreach ($orders as $order)
         <div class="col-sm-6">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title mb-2 font-weight-bold">{{ $order->jenis_treatment }}</h5>
               <p class="card-text h-auto">{{ $order->nama }} | {{ $order->alamat_pengambilan }}</p>
               <a href="" class="btn btn-primary">Detail Order</a>
               <a href="" class="btn btn-warning">Konfirmasi Order</a>
               <a href="" class="btn btn-danger float-right">Hapus</a>
             </div>
           </div>
         </div>
         @endforeach
       </div>

   </div>
</div>
@endsection