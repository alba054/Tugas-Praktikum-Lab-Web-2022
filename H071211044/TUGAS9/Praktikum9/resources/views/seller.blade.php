<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  <!-- start navbar -->
  <div class="d-flex id=wrapper">
  <div class="border-end bg-white" id="sidebar-wrapper">
       <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/">Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/s">Seller</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/c">Category</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/ps">Permission</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/p">Product</a>
    </div>
 </div>
<!-- end navbar -->

<br>

<div class="container">
    <!-- awal card form -->
    <div class="card mt-3">
<div class="card">
  <div class="card-header bg-info">
    Create/Edit data
  </div>
  <div class="card-body">
    <form method="post" action="">
<div class="form-group">
  @csrf
            <label>Nama</label>
            <input type="text" name="tnama" value="" class="form-control" placeholder="input nama anda disini" required>

            <label>Alamat</label>
            <input type="text" name="taddress" value="" class="form-control" placeholder=" " required>

            <label>Gender</label>
            <select class="form-control" name="tgender"  placeholder="-Gender-" required>
               <option value=""> </option>
               <option value="L"> Laki-laki </option>
               <option value="P">Perempuan </option> </select>

            <label>Permission</label>
            <select class="form-control" name="permission_id"  placeholder="Permission_id" required>
               <option value="">- Permission - </option> 
               @foreach($permission_id as $permission)
              <option value="{{ $permission->id }}">{{ $permission->name }}</option>
               @endforeach 
               </select>

            <label>No.Hp</label>
            <input type="text" name="tnohp" value="" class="form-control" placeholder=" " required>

            <label>Status</label>
            <input type="text" name="tstatus" value="" class="form-control" placeholder=" " required>
</div>

<br>
<button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
<button type="reset" class="btn btn-dark" name="breset">Kosongkan</button>


</form>
  </div>
</div>
     <!-- akhir card form -->

      <!-- awal card tabel -->
    <div class="card mt-3">
<div class="card">
  <div class="card-header bg-info text-white">
    Data Seller
  </div>
  <div class="card-body">
    
  <table class="table table-bordered table-striped">
        <tr> 
            <th>#</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>No.Hp</th>
            <th>Status</th>
            <th>Permission</th>
            <th>Aksi</th>

        </tr>
       
        <tbody>
                @foreach($data as $seller)
                <tr>
                  <td></td>
                  <td>{{ $seller->name }}</td>
                  <td>{{ $seller->address }}</td>
                  <td>{{ $seller->gender }}</td>
                  <td>{{ $seller->no_hp }}</td>
                  <td>{{ $seller->status }}</td>
                    <ul>
                      @foreach($seller->permissions as $permission)
                      <li>{{ $permission->name }}</li>
                      @endforeach
                    </ul>

                  <td><a href="/s/edit/{{ $seller->id }}" type="button" class="btn btn-warning">EDIT</a>
                  <a href="/s/delete/{{ $seller->id }}" type="button" class="btn btn-danger">DELETE</a></td>
                </tr>
                 @endforeach
    

    </table>
  </div>
</div>
</div>
    
<br>
<!-- akhir card tabel -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>