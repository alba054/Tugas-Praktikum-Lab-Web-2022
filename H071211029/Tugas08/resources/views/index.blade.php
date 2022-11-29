<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tugas 8</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="/css/dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">CRUD</a>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Logout</a>
      </div>
    </div>
  </header>

      <main class="container">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
          </div>
        </div>

        <h2>Insert New Data</h2>
        @if(session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('status') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('fail'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('fail') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="/add" method="post">
            @csrf
            <div class="form-floating mb-4">
              <input name="nim" type="text" id="form3Example3" class="form-control @error('nim') is-invalid @enderror" value="{{old('nim')}}"/>
              <label class="form-label" for="form3Example3">NIM </label>
              @error('nim')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div> 

            <div class="form-floating mb-4">
              <input name="nama" type="text" id="form3Example4" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}"/>
              <label class="form-label" for="form3Example4">Nama</label>
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating mb-4">
              <input name="alamat" type="text" id="form3Example4" class="form-control @error('alamat') is-invalid @enderror" value="{{old('alamat')}}"/>
              <label class="form-label" for="form3Example4">Alamat</label>
              @error('alamat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating mb-4">
              <input name="fakultas" type="text" id="form3Example4" class="form-control @error('fakultas') is-invalid @enderror" value="{{old('fakultas')}}"/>
              <label class="form-label" for="form3Example4">Fakultas</label>
              @error('fakultas')
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

        <h2>Data</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $row)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->nim }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->fakultas }}</td>
                <td>
                  <a href="/edit/{{ $row->id }}" class="btn btn-warning">Edit</a>
                  <a href="/delete/{{ $row->id }}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
        </div>
      </main>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
  </script>
  <script src="/js/dashboard.js"></script>
</body>

</html>