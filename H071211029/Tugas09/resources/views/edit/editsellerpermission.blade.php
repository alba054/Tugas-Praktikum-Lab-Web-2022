@extends('layout.edit')
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
          <a class="nav-link active" href="/product">
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
          <a class="nav-link" href="/permission">
            <span data-feather="bar-chart-2"></span>
            Permission
          </a>
        </li>
      </ul>

    </div>
  </nav>
@endsection

@section('data')
        <form action="/updatesellerpermission/{{ $data->id }}" method="post">
            @csrf
            <div class="form mb-4"> 
              <select name="seller_id" class="form-select" aria-label="Default select example" >
                  <option selected disabled>Seller</option>
                  @foreach($data as $seller)
                  <option value="{{ $seller->id }}">{{ $seller->id }}
                  @endforeach
                </select>
            @error('seller_id')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Submit
            </button>
          </form>
@endsection
