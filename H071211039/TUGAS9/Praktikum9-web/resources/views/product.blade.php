<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <div class="d-flex justify-content-end">
  <a href="/logout" ><button class="p-2 btn btn-primary" type="submit">Log Out</button></a>
</div> -->
<!-- <button class="btn btn-primary" type="submit">Log Out</button> -->

<!-- 
    <form class="container"  action="" method="post">
        @csrf
    <p>Create/Edit Data </p>
    <div class="form-floating mb-3">
        <input type="text" name="Nama" class="form-control" id="floatingInput" placeholder="name@example.com" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["NIM"] : "" ?>>
        <label for="floatingInput">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="Seller_id" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Nama"] : "" ?>>
        <label for="floatingPassword">ID Seller</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="Category_id" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Alamat"] : "" ?>>
        <label for="floatingPassword">ID Category</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="Price" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Nama"] : "" ?>>
        <label for="floatingPassword">Price</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="Status" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Alamat"] : "" ?>>
        <label for="floatingPassword">Status</label>
    </div>
        <br>
        <button type="submit" class="btn btn-primary mb-3">Simpan Data</button>
    </form>
    <br>

    <table class="table container">
        <thead>
        <div class="alert container alert-dark" role="alert"> Data Mahasiswa </div>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">ID Seller</th>
                <th scope="col">ID Category</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->seller_id }}</td>
                <td>{{ $item->category_id }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->status}}</td>
                <td>
                    <a href="/edit/{{ $item->id }}" type="button" class="btn btn-warning">EDIT</a>
                    <a href="/delete/{{ $item->id }}" type="button" class="btn btn-danger">DELETE</a>
                </td>
            </tr>
            @endforeach
           
        </tbody>
        
    </table> -->
    

    <div class="container"> 
            <div class="col-12 mt-5">
            <a href="/home" type="button" class="btn btn-secondary">Back to Home</a> 
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#productModal">Tambah data Product</button> 
            </div>
    <div class="row">
        @foreach($data as $item)
        <div class="card mt-5 col-md-3" style="margin 10px">
            <div class="card-body">
                <h5 class="card-title">Nama : {{ $item->name }}</h5>
                <h6 class="card-text">Seller : {{ $item->seller->name }}</h6>
                <h6 class="card-text">Category: {{ $item->category->name }}</h6>
                <p class="card-text">Price : {{ $item->price }}</p>
                <p class="card-text">Status : {{ $item->status}}</p>
                <a href="/editProduct/{{ $item->id }}" type="button" class="btn btn-warning card-link" data-bs-toggle="modal" data-bs-target="#productModal">Edit</a>
                <a href="/deleteProduct/{{ $item->id }}" type="button" class="btn btn-danger card-link">Delete</a>
            </div>
        </div>  
        @endforeach
    </div>
    </div>
  
    
<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="productModalLabel">Edit/Tambah Data product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form class="container"  action="" method="post">
        @csrf
    </div>
    <center><div class="form-floating mb-3 col-10">
        <input type="text" name="Nama" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Nama"] : "" ?>>
        <label for="floatingPassword">Nama Product</label>
    </div></center>
    <center><div class="form-floating mb-3 col-10">
    <select class="form-control" id="seller" name="seller">
        <option value="">-Seller-</option>
        @foreach($seller as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select>  
    </div></center>
    <center><div class="form-floating mb-3 col-10">
    <select class="form-control" id="category" name="category">
        <option value="">-Category-</option>
        @foreach($category as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select>
    </div></center>
    <center><div class="form-floating mb-3 col-10">
        <input type="text" name="Price" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Nama"] : "" ?>>
        <label for="floatingPassword">Price</label>
    </div></center>
    <center><div class="form-floating mb-3 col-10">
        <input type="text" name="Status" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Alamat"] : "" ?>>
        <label for="floatingPassword">Status</label>
    </div><center>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit/Simpan Data</button>
      </div>
    </form>
    </div>
  </div>
</div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  
  
</body>
</html>