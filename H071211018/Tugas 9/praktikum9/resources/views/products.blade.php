
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MENU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link mx-2" aria-current="page" href="/product">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="/">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="/seller">Seller</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="/permission">Permission</a>
        </li>
        
      </ul>
      <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
        <li class="nav-item mx-2">
          <a class="nav-link text-dark h5" href="" target="blank"><i class="fab fa-google-plus-square"></i></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-dark h5" href="" target="blank"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-dark h5" href="" target="blank"><i class="fab fa-facebook-square"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>    
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf 
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" name="price" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status" name="status" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="seller_id" class="col-sm-2 col-form-label">Seller_id</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="seller_id" id="seller_id">
                                <option value="">- Pilih Seller -</option>
                                @foreach($seller_id as $data)
                                <option value="{{ $data->seller_id }}">{{  $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="category_id" class="col-sm-2 col-form-label">Category_id</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="">- Pilih Category -</option>
                                @foreach($category_id as $data)
                                <option value="{{ $data->category_id }}">{{  $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div> <br>
                    <a href="?logout=true" class="btn btn-danger btn-sm">Log Out</a>
                </form>
            </div>
        </div> 

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Products
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Seller_id</th>
                            <th scope="col">Category_id</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $product_)
                        <tr>
                            <td></td>
                            <td>{{ $product_->name }}</td>
                            <td>{{ $product_->price }}</td>
                            <td>{{ $product_->status }}</td>
                            <td>{{ $product_->seller->name }}</td>
                            <td>{{ $product_->category->name }}</td>
                            
                            
                            <td>
                             <a href="/product/edit/{{ $product_->id }}"><button type="button" class="btn btn-warning">Edit</button></a>
                             <a href="/product/delete/{{ $product_->id }} "><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
                        
                </table>
            </div>
        </div>
    </div>
    
</body>

</html>