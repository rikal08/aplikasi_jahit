<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('Dashboard') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('Dashboard') }}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('Dashboard') }}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('Dashboard') }}/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('Dashboard') }}/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>CV. AGUS JAYA TAILOR</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Melakukan Pendaftaran</p>

    <form action="{{ url('daftar') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" placeholder="Masukan Nama" name="name">
        </div>
        <div class="form-group">
            <label for="">Telepon</label>
            <input type="text" class="form-control" placeholder="Masukan Telepon" name="telepon">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" placeholder="Masukan Email" name="email">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" placeholder="Masukan Password" name="password">
        </div>
      <div class="row">
        <div class="col-xs-6">
            <a href="{{ url('/') }}" class="btn btn-danger btn-block btn-flat"><i class="fa fa-home"> Kembali</i></a>
          </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <br>
    <a href="{{ route('login') }}" class="text-center">Silahkan Login</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('Dashboard') }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('Dashboard') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{ asset('Dashboard') }}/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
