
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>Data Matakuliah</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

  {{-- custom css --}}
  <style>
    a{
      text-decoration: none;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <ul class= "navbar-nav">
          @auth
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person"></i> {{ auth()->user()->name }}
          </a>

          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      </ul>
      <ul class= "navbar-nav">
          @auth
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person"></i> {{ auth()->user()->name }}
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/matakuliah"><i class="bi bi-grid-3x3-gap-fill"></i> My Absensi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>

              <a href="{{ route('logout') }}">
                @csrf
                <button type="submit"  class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</li></button>
              </form>
            </li>
          </ul>
        </li>
          @else
            <li class="nav-item">
              <a href="{{ url('/auth/login')}}" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
          @endauth
      </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">WebApp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin-lte/dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

          <a href="#" class="d-block">{{ auth()->user()->name }}</a>

        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                 <a href="/dashboard" class="nav-link">
                   <i class="nav-icon fas fa-th"></i>
                   <p>
                     Dashboard
                     <span class="right badge badge-danger">hot</span>
                   </p>
                 </a>
               </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Mahasiswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/mahasiswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/matakuliah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Matakuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/presensi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Presensi</p>
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
  <div class="content-wrapper" id="app">


    <!-- Main content -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Perkuliahan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container mt-5">
        <a href="/insertMatakuliah">
          <button type="button" class="btn btn-success mb-3">Insert Data</button>
        </a>
        <a href="#">
          <button type="button" class="btn btn-primary mb-3 float-end">Export</button>
        </a>

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Terimakasih!</strong> {{$message}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <table class="table">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col" id="tes">Kode Matakuliah</th>
              <th scope="col">Nama Matakuliah</th>
              <th scope="col">Nama Dosen</th>
              <th scope="col">SKS</th>
              <th scope="col">Dibuat</th>

              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($data as $row)
            <tr>
              <th scope="row">{{$no++}}</th>
              <td>{{$row->id_matkul}}</td>
              <td>{{$row->Nama_matkul}}</td>
              <td>{{$row->Nama_Dosen}}</td>
              <td>{{$row->SKS}}</td>
              <td>{{$row->created_at->diffForHumans()}}</td>
              <td>
                <a href="/tampilDataMatakuliah/{{$row->id}}" class="btn btn-info">Update</a>
                <a href="/deleteMatakuliah/{{$row->id}}" class="btn btn-danger">Delete</a> 
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        
        <a href="/dashboard"><img src="https://img.icons8.com/tiny-glyph/16/null/reply-arrow.png"/></a>
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
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('js/app.js')}}"></script>

<script>

let address = document.getElementById('tes')

</script>
</body>
</html>
