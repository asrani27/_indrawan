<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WISATA KALSEL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- IziToast -->
  <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
  <script src="/notif/dist/js/iziToast.min.js" type="text/javascript"></script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-purple layout-top-nav">
  <div class="wrapper">

    <header class="main-header">

    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper" style="background-image: url('/logo/login.jpg'); background-size:cover">
      <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          {{-- <h1>
            Top Navigation
            <small>Example 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Layout</a></li>
            <li class="active">Top Navigation</li>
          </ol> --}}
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
              <div class="text-center">

              </div>

              <br /><br />

              <div class="box box-warning" style="box-shadow: 0 8px 8px 0 rgba(0,0,0,.2);border-radius:30px">
                <div class="box-header text-center">
                  <h3><strong>LOGIN SISTEM WISATA KAL-SEL</strong></h3>
                </div>
                <form class="form-horizontal" method="post" action="/login" autocomplete="off">
                  @csrf

                  <div class="box-body" style="padding:30px">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="username" name="username"
                          style="border-radius: 20px">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="Password" name="password"
                          style="border-radius: 20px">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label"></label>
                      <div class="col-sm-10">
                        <button type="submit" class="btn bg-navy btn-block pull-right" style="border-radius: 20px"><i
                            class="fa fa-sign-in"></i> MASUK</button>
                        <a href="/" class="btn bg-silver btn-block pull-right" style="border-radius: 20px"><i
                            class="fa fa-arrow-left"></i> KE BERANDA</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-3">
            </div>
          </div>

        </section>
        <!-- /.content -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="/assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="/assets/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="/assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/assets/dist/js/demo.js"></script>

  <script type="text/javascript">
    @include('layouts.notif')
  </script>
</body>

</html>