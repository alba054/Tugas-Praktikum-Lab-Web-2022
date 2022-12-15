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


    <!-- <form class="container"  action="" method="post">
        @csrf
    <p>Create/Edit Data </p>
    <div class="form-floating mb-3">
        <input type="text" name="Nama" class="form-control" id="floatingInput" placeholder="name@example.com" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["NIM"] : "" ?>>
        <label for="floatingInput">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="address" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Nama"] : "" ?>>
        <label for="floatingPassword">Address</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="gender" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Alamat"] : "" ?>>
        <label for="floatingPassword">Gender</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="no_hp" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Nama"] : "" ?>>
        <label for="floatingPassword">No HP</label>
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
                <th scope="col">Address</th>
                <th scope="col">Gender</th>
                <th scope="col">No HP</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->gender }}</td>
                <td>{{ $item->no_hp }}</td>
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
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#sellerModal">Tambah data seller</button> 
            </div>
    <div class="row">  
        @foreach($data as $item)
        <div class="card mt-5 col-md-3" style="margin 10px">
            <div class="card-body">
                <h5 class="card-title">Nama : {{ $item->name }}</h5>
                <p class="card-text">Address : {{ $item->address }}</p>
                <p class="card-text">Gender : {{ $item->gender }}</p>
                <p class="card-text">No HP : {{ $item->no_hp }}</p>
                <h6 class="card-text">Status : {{ $item->status }}</h6>
                <h6 class="card-text">Products : 
                    
                    <ul>
                        @foreach($item->products as $product)
                        <li>{{ $product->name }}</li>
                        @endforeach
                    </ul>
                </h6>
                <h6 class="card-text">Permissions :
                    <ul>
                        @foreach($item->permissions as $permission_)
                        <li>{{ $permission_->name }}</li>
                        @endforeach
                    </ul>
                </h6>
                <a href="/editSeller/{{ $item->id }}" type="button" class="btn btn-warning card-link" data-bs-toggle="modal" data-bs-target="#sellerModal">Edit</a>
                <a href="/deleteSeller/{{ $item->id }}" type="button" class="btn btn-danger card-link">Delete</a>
            </div>
        </div>  
        @endforeach
    </div>
    </div>
    
<!-- Modal -->
<div class="modal fade" id="sellerModal" tabindex="-1" aria-labelledby="sellerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="permissionModalLabel">Edit/Tambah Data Seller</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form class="container"  action="" method="post">
        @csrf
    </div>
    <center><div class="form-floating mb-3 col-10">
        <input type="text" name="Nama" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Nama"] : "" ?>>
        <label for="floatingPassword">Nama</label>
    </div></center>
    <center><div class="form-floating mb-3 col-10">
        <input type="text" name="address" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Nama"] : "" ?>>
        <label for="floatingPassword">Address</label>
    </div></center>
    <center><div class="form-floating mb-3 col-10">
        <select class="form-control" id="gender" name="gender">
            <option value="">-Pilih gender-</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div></center>
    <center><div class="form-floating mb-3 col-10">
        <select class="form-control" id="gender" name="permission">
            <option value="">-Pilih permission-</option>
            @foreach($permissions as $permission)
            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
            @endforeach
        </select>
    </div></center>
    <center><div class="form-floating mb-3 col-10">
        <input type="text" name="no_hp" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Nama"] : "" ?>>
        <label for="floatingPassword">No HP</label>
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
  
</body>
</html>