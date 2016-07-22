<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title','Page Header')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
@include('layouts.partials.styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

@include('layouts.partials.mainheader')

  <!-- =============================================== -->

@include('layouts.partials.mainsidebar')


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

@include('layouts.partials.contentheader')

    <!-- Main content -->
    <section class="content">

@include('layouts.partials.content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('layouts.partials.mainfooter')

  <!-- Control Sidebar -->
@include('layouts.partials.control-sidebar')

</div>
<!-- ./wrapper -->
@include('layouts.partials.script')


</body>
</html>
