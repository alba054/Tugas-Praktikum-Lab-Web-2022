<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<br>

<div class="container">
    <!-- awal card form -->
    <div class="card mt-3">
<div class="card">
  <div class="card-header">
    Create/Edit data
  </div>
  <div class="card-body">
    <form method="post" action="">
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="tnim" value="" class="form-control" placeholder="input nim anda disini" required>
</div>
<div class="form-group">
  @csrf
            <label>NAMA</label>
            <input type="text" name="tnama" value="" class="form-control" placeholder="input nama anda disini" required>
</div>
<div class="form-group">
            <label>ALAMAT</label>
            <textarea class="form-control" name="talamat" placeholder="input alamat anda disini"></textarea>
</div>
<div class="form-group">
            <label>FAKULTAS</label>
            <select class="form-control" name="tfakultas"  placeholder="Pilih Fakultas" required>
               <option value="">- Pilih Fakultas - </option> 
               <option value=""></option> 
               <option value="MIPA"> MIPA </option>
               <option value="KEPERAWATAN"> KEPERAWATAN </option> 
               <option value="FARMASI"> FARMASI </option> 
               <option value="KEHUTANAN"> KEHUTANAN </option>
               <option value="PERTANIAN"> PERTANIAN </option>
               <option value="PETERNAKAN"> PETERNAKAN </option>
               <option value="FKM"> FKM </option>
               <option value="FKG"> FKG </option>
               <option value="FEB"> FEB </option>
               <option value="FIB"> FIB </option>
               <option value="FISIP"> FISIP </option>
               <option value="FIKP"> FIKP </option>
               <option value="TEKNIK"> FT </option>
               <option value="KEDOKTERAN"> KEDOKTERAN </option>
               <option value="HUKUM"> HUKUM </option>

</select>
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
  <div class="card-header bg-secondary text-white">
    Data Mahasiswa
  </div>
  <div class="card-body">
    
  <table class="table table-bordered table-striped">
        <tr> 
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Fakultas</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $item)
        <tr> 
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->fakultas }}</td>
            <td>
              <a href="/edit/{{ $item->id }}" type="button" class="btn btn-warning">EDIT</a>
              <a href="/delete/{{ $item->id }}" type="button" class="btn btn-danger">DELETE</a>
</td>
        </tr>
        @endforeach

    </table>
  </div>
</div>
    
<br>
<!-- akhir card tabel -->
<div>

  <a href="?logout=true" class="btn btn-success"> logout </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>