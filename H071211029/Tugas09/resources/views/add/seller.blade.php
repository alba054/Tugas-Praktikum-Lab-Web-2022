@extends('layout.add')
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
          <a class="nav-link active" href="/seller">
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
        <form action="/addseller" method="post">
            @csrf
            <div class="form-floating mb-4">
              <input name="nama" type="text" id="form3Example3" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}"/>
              <label class="form-label" for="form3Example3">Nama </label>
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div> 

            <div class="form-floating mb-4">
              <input name="address" type="text" id="form3Example4" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}"/>
              <label class="form-label" for="form3Example4">Alamat</label>
              @error('address')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form mb-4">
                <select name="gender" class="form-select" aria-label="Default select example" >
                    <option selected disabled>Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              @error('gender')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating mb-4">
              <input name="no_hp" type="text" id="form3Example4" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}"/>
              <label class="form-label" for="form3Example4">No. HP</label>
              @error('no_hp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating mb-4">
              <input name="status" type="text" id="form3Example4" class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}"/>
              <label class="form-label" for="form3Example4">Status</label>
              @error('status')
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
