<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
   
</head>
<body>
    
<div class="card container">
        <div class="container"> 
            <div class="card header">
                <div class=" col-12 mt-5">
                <a href="/home" type="button" class="btn btn-secondary">Back to Home</a> 
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah data category</button> 
                </div>
            </div>
        <div class="row">  
        @foreach($data as $item)
        <div class="card mt-5 col-md-3" style="margin 10px">
            <div class="card-body">
                <h5 class="card-title">Nama : {{ $item->name }}</h5>
                <p class="card-text">Status : {{ $item->status }}</p>
                <a href="/editCategory/{{ $item->id }}" type="button" class="btn btn-warning card-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>
                <a href="/deleteCategory/{{ $item->id }}" type="button" class="btn btn-danger card-link">Delete</a>
            </div>
        </div>  
        
        @endforeach
        </div>
        </div>
  
 </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit/Tambah Data</h1>
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

