@extends('layout.main')

@section('nav')
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/index">
            <span data-feather="home"></span>
            Pivot
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product">
            <span data-feather="file"></span>
            Product
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category">
            <span data-feather="shopping-cart"></span>
            Category
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/seller">
            <span data-feather="users"></span>
            Seller
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/permission">
            <span data-feather="bar-chart-2"></span>
            Permission
          </a>
        </li>
      </ul>

    </div>
  </nav>
  @endsection

  @section('data')
  @if(session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('status') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
  @endif
  
  <a href="/viewpermission" type="button" class="btn btn-success">Tambah +</a>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Desc</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
          <th scope="col">Seller</th>
        </tr>
      </thead>
      <tbody>
          @foreach($data as $row)
          <tr>
            <td>{{ Str::lower($row->nama) }}</td> 
            <td>{{ $row->desc }}</td>
            <td>{{ $row->status }}</td>
            <td>
              <a href="/editpermission/{{ $row->id }}" class="btn btn-warning">Edit</a>
              <a href="/deletepermission/{{ $row->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
            <td>
              @foreach($row->seller as $item)
                - {{ $item->nama }} <br>
              @endforeach
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
    @endsection