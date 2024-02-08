<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shivoham|AdminPanel</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min2167.css?v=3.2.0')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>

</ul>
<ul class="navbar-nav ml-auto">


<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-user"></i>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-user mr-2"></i> {{ Auth::user()->name }}
</a>
<div class="dropdown-divider"></div>
<a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
<i class="fas fa-sign-out-alt mr-2"></i>Logout
</a>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</div>
</li>


</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="#" class="brand-link">
<!-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
<span class="brand-text font-weight-light">Shivoham</span>
</a>

<div class="sidebar">
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  <li class="nav-item">
    <a href="{{route('admin')}}" class="nav-link"><i class="fa fa-home fa-fw nav-icon"></i><p>Dashboard</p></a>
  </li>

  <li class="nav-item">
    <a href="{{route('gallery-list')}}" class="nav-link"><i class="fa fa-camera-retro nav-icon"></i><p>Gallery</p></a>
  </li>

  <li class="nav-item">
    <a href="{{route('slider-list')}}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Home Page Slider</p></a>
  </li>

  <li class="nav-item">
    <a href="{{route('offer-list')}}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Offer Slider</p></a>
  </li>

  <li class="nav-item">
    <a href="{{route('testimonial-list')}}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Testimonial</p></a>
  </li>

  <li class="nav-item">
    <a href="{{route('service-list')}}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Services</p></a>
  </li>

  <li class="nav-item">
    <a href="{{route('about-us-edit')}}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>About Us</p></a>
  </li>

  <li class="nav-item">
    <a href="#" class="nav-link"><i class="fa fa-cog fa-fw"></i><p>Settings<i class="fas fa-angle-left right"></i></p></a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{route('logo-edit')}}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Logo</p></a>
    </li>
    <li class="nav-item">
      <a href="{{route('contact-edit')}}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Contact Us</p></a>
    </li>
  </ul>
</ul>




<!-- <li class="nav-item">
<a href="" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Contact Us</p>
</a>
</li> -->
</nav>

</div>

</aside>

<div class="content-wrapper">
   @include('flash-message')
   @yield('content') 
</div>

<footer class="main-footer">

<strong>Copyright &copy; 2023 <a href="https://impliestech.site/book/">Book Box</a>.</strong> All rights reserved.
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{asset('admin/dist/js/adminlte.min2167.js?v=3.2.0')}}"></script>



<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  window.onload = function() {
    // Get the current date in the format YYYY-MM-DD
    var currentDate = new Date().toISOString().slice(0, 10);

    // Set the value of the input field to the current date
    document.getElementById("datePicker").value = currentDate;
  };
</script>
 <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script type="text/javascript">
  CKEDITOR.replace('editor', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});

 CKEDITOR.replace('editor1', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});
</script>