<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPK Pemilihan Smartphone | Registrasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
  
<div style="text-align: center;">

  <img src="{{asset('assets/img/logo.png')}}" alt="" style="height: 100px;  margin-top : 15%">
  <br>

  <h3>Sistem Rekomendasi Pemilihan Smartphone</h3>
  <h5>Kombinasi SAW dan WP</h5>
</div>

<br>
  
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrasi Pengguna Baru</p>
      <form action="{{route('register-pengguna')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama lengkap anda">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Masukan username anda" >
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukan password anda">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email"  placeholder="Masukkan email anda">
            </div>
                              
            <div class="row">
                <!-- /.col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">Registrasi</button>
                </div>
                <!-- /.col -->
            </div>
        </div>
        
        </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
