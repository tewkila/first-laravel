<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    @include('admin.parts.head')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- header -->
@include('admin.parts.header')
<!-- /header -->

    <!-- Main Sidebar Container -->
@include('admin.parts.leftmenu')
<!-- /.sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       @yield('body')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@include('admin.parts.footer')
<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.parts.scripts')
</body>
</html>
