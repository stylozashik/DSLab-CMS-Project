<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DSLab | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="btn btn-outline-secondary" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <a href="/dashboard/profile/admin" class="dropdown-item">
            <i class="fas fa-address-card"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
            <a href="{{ url('/admin-logout') }}" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{ URL::asset('frontend/assets/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">DS Lab</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/dashboard/logo') }}" class="nav-link">
              <i class="nav-icon fab fa-bandcamp"></i>
              <p>
                Logo Section
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Banner Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard/banner') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Add Banner Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/dashboard/banner/edit')}}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Edit Banner Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/banner/image') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>Banner Image</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                About Section One
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard/about/one/add') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>Add About Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/about/one/edit') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>Edit About Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/about/one/image') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>About Image One</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                About Section Two
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard/about/two/add') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>Add About Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/about/two/edit') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>Edit About Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/about/two/image') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>About Image One</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Works Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard/works') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>All Works</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/works/add') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Add Works</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Team Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard/team') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>All Members</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/team/add') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Add Member</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Teacher Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard/teacher') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>All Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/teacher/add') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Add Teacher</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Student Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard/student') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>All Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/student/add') }}" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Add Student</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Research Topics Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard/research-topic') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>All Research Topics</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dashboard/research-topic/add') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>Add Research Topics</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Contact Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard/messages') }}" class="nav-link">
                  <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                  <p>All Messages</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('heading')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{ url('/') }}" target="_blank">Visit Site</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('main_content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <script>document.write(new Date().getFullYear())</script>
    Copyright &copy; All Rights Reserved By <a href="{{ url('https://daffodilvarsity.edu.bd/') }}"><strong>Daffodil International University </a></strong>
    <div class="float-right d-none d-sm-inline-block">
    Version : 3.0.1 | Developed By <span><a href="https://www.freelancer.com/u/rexbdsoft" target="_blank">Ashikur</a></span>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('backend/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/js/demo.js') }}"></script>
<script src="https://kit.fontawesome.com/f57279881f.js" crossorigin="anonymous"></script>

<script>
  $(document).ready(function () {
        var url = window.location;
        $('ul.nav li.nav-item a[href="' + url + '"]').closest('a.nav-link').addClass('active');
        $('ul.nav li.nav-item a').filter(function () {
            return this.href == url;
        }).parent().addClass('active').parent().parent().addClass('active');
  });

  $(document).ready(function () {
        var url = window.location;
        $('ul.nav li.nav-item a[href="' + url + '"]').closest('li.nav-item').addClass('menu-open');
        $('ul.nav li.nav-item a').filter(function () {
            return this.href == url;
        }).parent().addClass('menu-open').parent().parent().addClass('menu-open');
  });
</script>
</body>
</html>
