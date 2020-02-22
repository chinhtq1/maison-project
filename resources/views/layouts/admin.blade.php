
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin-theme/plugins/fontawesome-free/css/all.min.css') }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin-theme/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

  <!-- My Css -->
  <link href="{{ asset('css/admin.css') }}" type="text/css" rel="stylesheet">

  <!-- Extra CSS -->
  @yield('extra-css')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="admin-app">

  <!-- Navbar -->
    @include('admin.blocks.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin.blocks.main-sidebar')
  <!-- end main-sidebar-->

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ $page_name?$page_name:'' }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $page_name }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <section class="content">
          @yield('admin-content')    
        </section>     
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Footer -->
    @include('admin.blocks.footer')
  <!-- end footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('admin-theme/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin-theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-theme/js/adminlte.min.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('message.type') }}";
    console.log(type);
    switch(type){
        case 'error':
            toastr.error("{{ Session::get('message.text')}}");
            break;

        case 'info':
            toastr.info("{{ Session::get('message.text') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message.text') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message.text')  }}");
            break;
    }
    {{Session::forget('message')}}
  @endif

  @if(Session::has('message_errors'))
    var type = "{{ Session::get('message_errors.type') }}";
    console.log(type);
  
    toastr.error("{{ Session::get('message_errors.text')}}");

    {{Session::forget('message_errors')}}
  @endif
</script>

<!-- Extra-Script -->
@yield('extra-script')


</body>
</html>
