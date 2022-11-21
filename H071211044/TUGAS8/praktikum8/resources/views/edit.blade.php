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
    <form method="post" action="/edit/{{ $data->id }}">
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="tnim" value="{{ $data->nim}}" class="form-control" placeholder="input nim anda disini" required>
</div>
<div class="form-group">
  @csrf
            <label>NAMA</label>
            <input type="text" name="tnama" value="{{ $data->nama}}" class="form-control" placeholder="input nama anda disini" required>
</div>
<div class="form-group">
            <label>ALAMAT</label>
            <textarea class="form-control" name="talamat" value="{{ $data->alamat}}" placeholder="input alamat anda disini"></textarea>
</div>
<div class="form-group">
            <label>FAKULTAS</label>
            <select class="form-control" name="tfakultas"  placeholder="Pilih Fakultas" required>
               <option value="{{ $data->fakultas}}"> {{ $data->fakultas}}" </option> 
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
    