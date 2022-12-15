<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ordering Fira</title>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('admin/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

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

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
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
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminCom</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Muhammad Inzani</a>
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/mkn" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Makanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pesanan</p>
                </a>
              </li>
          </li>

              <li class="nav-item">
                <a href="/tag" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tag</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Back to dashboard</p>
                </a>
              </li>
            </ul>
            </ul>
          </li>
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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card-body">
                    
                    <!-- Main content -->
                    <section class="connectedSortable">
                            <div class="container-fluid">
                                <div class="row">
                                    <section class="col-lg-12 connectedSortable">
                                        <!-- start makanan favorite -->
                                      <div class="card">
                                        <div class="alert alert-warning" role="alert">
                                        <h4>  Category </h4>
                                        </div>
                
                                        <div class="form-group">
                                            <label>FILTER BY : </label>
                                                <select class="form-control">
                                                        <option>By Date</option>
                                                        <option>By Most</option>
                                                      
                                                </select>
                                          </div>
                                
                                          <div class="card-body">
                    <table class="table">
                        <thead>
                             <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Category</th>
                                <th scope="col">Jumlah makanan </th>
                                <th scope="col">Create date</th>
                                <th scope="col">Author</th>    
                                <th scope="col">Aksi</th> 
                             </tr>
                             </thead>
                             <tbody>
                                @foreach($categories as $category)
                              <tr>
                              <td>1</td>
                              <td>{{ $category->name }}</td>
                              <td>123</td>
                              <td></td>
                              <td></td>
                              <td>
                                <a href="/category/edit/{{ $category->id }}" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i> Edit </a></a>
                                <a href="/cat/delete/{{ $category->id }}" button type="button" class="btn btn-secondary "><i class="fas fa-trash"></i> Delete </a></a>
                                <!-- <a href="" type="button" class="btn" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i> Edit</a></a> -->
                                                <!-- <a href="" type="button" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#modal-edit">Edit</a></a> -->
                                <!-- <a href="" type="button" class="btn btn-block btn-outline-info" data-toggle="modal">Delete</a></a> -->
                              </td>
                              </tr>
                              @endforeach
                             </tbody>
                    </table>
                    <div class="card-footer clearfix">
                <a href="" type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#modal-add"><i class="fas fa-plus"></i> Add Category</a></a>
               
              </div>
                </div>
                </div>

    <!-- Main content -->
    <section class="connectedSortable">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                    <div class="form-group">
                            <label>FILTER BY : </label>
                                <select class="form-control">
                                        <option>By Date</option>
                                        <option>By Most</option>
                                        
                                </select>
                          </div>
                        <!-- start makanan favorite -->
                      <div class="card">
                        <div class="alert alert-warning" role="alert">
                        <h4>  Appetizer </h4>
                        </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-light">
                                            <div class="inner">
                                                <img class="card-img-top" alt="" src="{{asset('appsalad.jpg')}}">
                                                <span class="badge text-bg-primary float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-shopping-cart"></i> 3333 </div>
                                            </div></span>
                                            <span class="badge text-bg-danger float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-heart"></i> 555  </div>
                                            </div></span>
                                                <!-- src="{{asset('kari.jpg')}}" -->
                                                <p>Nama Makanan</p>
                                                <br>
                                                <h5 >Tersedia 43</h5>
                                            </div>
                                            
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                        <div class="small-box bg-light">
                                            <div class="inner">
                                                <img class="card-img-top" alt="" src="{{asset('roti.jpg')}}">
                                                <span class="badge text-bg-primary float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-shopping-cart"></i> 3333 </div>
                                            </div></span>
                                            <span class="badge text-bg-danger float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-heart"></i> 555  </div>
                                            </div></span>
                                                <p>Nama Makanan</p>
                                                <br>
                                                <h5 >Tersedia 43</h5>
                                            </div>
                                            
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-light">
                                            <div class="inner">
                                                <img class="card-img-top" alt="" src="{{asset('app2.jpg')}}">
                                                <span class="badge text-bg-primary float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-shopping-cart"></i> 3333 </div>
                                            </div></span>
                                            <span class="badge text-bg-danger float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-heart"></i> 555  </div>
                                            </div></span>
                                                <p>Nama Makanan</p>
                                                <br>
                                                <h5 >Tersedia 43</h5>
                                              
                                            </div>
                                            
                                            <div class="icon">
                                                <i class="ion ion-person-add"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- <div class="card-footer clearfix">
                              <button type="button" class="btn btn-secondary float-right"><i class="fas fa-trash"></i> Delete </button>
                             <button type="button" class="btn btn-info float-right"><i class="fas fa-edit"></i> Edit </button> -->
              </div>
                            <!-- Small boxes (Stat box) -->
                        <!-- </div> -->
                        <!-- end makanan favorite -->
                        <div class="card">
                        <div class="alert alert-warning" role="alert">
                        <h4>  Main Course </h4>
                        </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-light">
                                            <div class="inner">
                                                <img class="card-img-top" alt="" src="{{asset('baksomc.jpg')}}">
                                                <span class="badge text-bg-primary float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-shopping-cart"></i> 3333 </div>
                                            </div></span>
                                            <span class="badge text-bg-danger float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-heart"></i> 555  </div>
                                            </div></span>
                                                <!-- src="{{asset('kari.jpg')}}" -->
                                                <p>Nama Makanan</p>
                                                <br>
                                                <h5 >Tersedia 43</h5>
                                            </div>
                                            
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                        <div class="small-box bg-light">
                                            <div class="inner">
                                                <img class="card-img-top" alt="" src="{{asset('nasimc.jpg')}}">
                                                <span class="badge text-bg-primary float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-shopping-cart"></i> 3333 </div>
                                            </div></span>
                                            <span class="badge text-bg-danger float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-heart"></i> 555  </div>
                                            </div></span>
                                                <p>Nama Makanan</p>
                                                <br>
                                                <h5 >Tersedia 43</h5>
                                            </div>
                                            
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-light">
                                            <div class="inner">
                                                <img class="card-img-top" alt="" src="{{asset('stik.jpg')}}">
                                                <span class="badge text-bg-primary float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-shopping-cart"></i> 3333 </div>
                                            </div></span>
                                            <span class="badge text-bg-danger float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-heart"></i> 555  </div>
                                            </div></span>
                                                <p>Nama Makanan</p>
                                                <br>
                                                <h5 > Tersedia 43</h5>
                                              
                                            </div>
                                            
                                            <div class="icon">
                                                <i class="ion ion-person-add"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- <div class="card-footer clearfix">
                              <button type="button" class="btn btn-secondary float-right"><i class="fas fa-trash"></i> Delete </button>
                             <button type="button" class="btn btn-info float-right"><i class="fas fa-edit"></i> Edit </button>
              </div>
                            
                        </div> -->
                            <!-- Small boxes (Stat box) -->
                        </div>
                        <!-- start makanan terlaris -->
                        <div class="card">
                            <div class="card-header">
                              <div class="alert alert-warning" role="alert">
                              <h4> Dessert </h4>
                            </div>
                              </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-light">
                                            <div class="inner">
                                                <img class="card-img-top" src="{{asset('app3.jpg') }} " alt="">
                                                <span class="badge text-bg-primary float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-shopping-cart"></i> 3333 </div>
                                            </div></span>
                                            <span class="badge text-bg-danger float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-heart"></i> 555  </div>
                                            </div></span>
                                                <p>Nama Makanan</p>
                                                <br>
                                                <h5 >Tersedia 43</h5>
                                            </div>
                                            
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                        <div class="small-box bg-light">
                                            <div class="inner">
                                            <img class="card-img-top" src="{{asset('disice1.jpg') }} " alt="">
                                            <span class="badge text-bg-primary float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-shopping-cart"></i> 3333 </div>
                                            </div></span>
                                            <span class="badge text-bg-danger float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-heart"></i> 555  </div>
                                            </div></span>
                                                <p>Nama Makanan</p>
                                                <br>
                                                <h5 >Tersedia 43</h5>
                                            </div>
                                           
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-light">
                                            <div class="inner">
                                            <img class="card-img-top" src="{{asset('dispuding.jpg') }} " alt="">
                                            <span class="badge text-bg-primary float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-shopping-cart"></i> 3333 </div>
                                            </div></span>
                                            <span class="badge text-bg-danger float-right"><div class="article-badge">
                                             <div class="article-badge-item "><i class="fas fa-heart"></i> 555  </div>
                                            </div></span>
                                                <p>Nama Makanan</p>
                                                <br>
                                                <h5 >Tersedia 43</h5>
                                            </div>

                                             
                                            <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- <div class="card-footer clearfix">
                              <button type="button" class="btn btn-secondary float-right"><i class="fas fa-trash"></i> Delete </button>
                             <button type="button" class="btn btn-info float-right"><i class="fas fa-edit"></i> Edit </button>
              </div> -->
                            
                        </div>
                            <!-- Small boxes (Stat box) -->
                        </div>
                        <!-- <div class="card-footer clearfix">
                <a href="" type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#modal-add"><i class="fas fa-plus"></i> Add Menu</a></a>
               
              </div> -->
                        <!-- end makanan terlaris -->
                    </section>
                </div>

                <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" >
            <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas "></i>Nama Category</label>
                    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ..." name="name">
                  </div>
                  <!-- <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far "></i>Image</label>
                    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                  </div> -->
                  <!-- <div class="mb-3">
                  <label for="formFileSm" class="form-label">Image</label>
                  <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div> -->
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far"></i>Deskripsi</label>
                    <!-- <input type="text" class="form-control is-primary" id="inputError" placeholder="Enter ..."> -->
                    <textarea class="summernote" name="desk"><p>Masukkan kata</p></textarea>
                  </div>
               
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-light">tambah data</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
            
      <form action="" method="post">
        @csrf
      <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Category </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" >
            <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas "></i>Nama Category</label>
                    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ..." name="name">
                  </div>
                  <!-- <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far "></i>Image</label>
                    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                  </div> -->
                  <!-- <div class="mb-3">
                  <label for="formFileSm" class="form-label">Image</label>
                  <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div> -->
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far"></i>Deskripsi</label>
                    <!-- <input type="text" class="form-control is-primary" id="inputError" placeholder="Enter ..." name="desk"> -->
                    <textarea class="summernote" name="desk"><p>Masukkan kata</p></textarea>
                  </div>
               
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light">tambah data</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </form>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="http://adminlte.io">Ordering App</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
  </script>

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/plugins/moment/moment.min.js')}}""></script>
<script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>