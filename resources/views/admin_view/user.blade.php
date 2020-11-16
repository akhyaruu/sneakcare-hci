@extends('admin_view.layout.main')

@section('content')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar User</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Daftar User</li>
               </ol>
            </div>
         </div>
         <div class="content mt-4">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-friends"></i></span>
               </div>
               <input type="text" class="form-control" placeholder="cari user...">
            </div>
         </div>
         @if (session('message'))
            <div class="alert alert-success" role="alert">
               {{ session('message') }}
            </div>
         @endif
         <div class="content mt-4">
            <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Nama Lengkap</th>
                   <th scope="col">Email</th>
                   <th scope="col">No. Telp</th>
                   <th scope="col">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                  @foreach ($users as $user)
                     <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->no_telp }}</td>
                        <td><button class="btn btn-hapus btn-danger btn-sm" value="{{ $user->id }}"  data-toggle="modal" data-target="#modalKonfirmasiHapus">Hapus User</button></td>
                     </tr>
                  @endforeach
               </tbody>
             </table>
         </div>
      </div>
      {{-- modal --}}
      <div class="modal fade" id="modalKonfirmasiHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah kamu yakin untuk menghapus user ini?  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
              <form action="{{ url('/dashboard-admin-sneakcare/user-destory') }}" method="POST">
                  @csrf
                  <input type="text" id="inputuser" name="id_user" value="" hidden>
                  <button type="submit" class="btn btn-primary">Ya, hapus user</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      

   </div>
</div>
   
      
@endsection


@section('custom-script')
   <script>
      const bHapus = document.getElementsByClassName('btn-hapus');
      const inputuser = document.getElementById('inputuser');
      for (const button of bHapus) {
         button.addEventListener('click', function(event) {
            const nilai = button.value;
            console.log(typeof(nilai));
            inputuser.value = nilai;
         })
      }
   </script>
@endsection