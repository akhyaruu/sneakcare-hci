<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <title>Daftar Akun - Sneakcare</title>
</head>
<body>
   <div class="container">
      <div class="row mx-auto">
         <form action="/user/register" method="POST">
            @csrf
            <div class="form-group">
              <label for="nama_lengkap">Nama Lengkap</label>
              <input name="nama" type="text" class="form-control" id="nama_lengkap" required>
            </div>
            <div class="form-group">
              <label for="email_user">Email</label>
              <input name="email" type="email" class="form-control" id="email_user" required>
            </div>
            <div class="form-group">
               <label for="no_telp_user">No Telepon</label>
               <input name="no_telp" type="number" class="form-control" id="no_telp_user" required>
            </div>
            <div class="form-group">
               <label for="password_user">Password</label>
               <input name="password" type="password" class="form-control" id="password_user" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
   </div>
</body>
</html>