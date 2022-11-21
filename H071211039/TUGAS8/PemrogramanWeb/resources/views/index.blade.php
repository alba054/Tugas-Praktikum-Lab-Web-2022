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


    <form class="container"  action="" method="post">
        @csrf
    <p>Create/Edit Data </p>
    <div class="form-floating mb-3">
        <input type="text" name="NIM" class="form-control" id="floatingInput" placeholder="name@example.com" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["NIM"] : "" ?>>
        <label for="floatingInput">NIM</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="Nama" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Nama"] : "" ?>>
        <label for="floatingPassword">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="Alamat" class="form-control" id="floatingPassword" placeholder="Password" value=<?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Alamat"] : "" ?>>
        <label for="floatingPassword">Alamat</label>
    </div>
    <select name="Fakultas" class="form-select" aria-label="Default select example">
        <option selected>Fakultas</option>
        <option value="MIPA">Mipa</option>
        <option value="Kedokteran">Kedokteran</option>
        <option value="Kedokteran">Kedokteran Gigi</option>
        <option value="Hukum">Hukum</option>
        <option value="Keperawatan">Keperawatan</option>
        <option value="Kedokteran">Kesehatan Masyarakat</option>
        <option value="Kedokteran">FIKP</option>
        <option value="Ekonomi">Ekonomi dan Bisnis</option>
        <option value="Teknik">Teknik</option>
        <option value="FISIP">FISIP</option>
        <option value="Perternakan">Perternakan</option>
        <option value="Farmasi">Farmasi</option>
        <option value="Pertanian">Pertanian</option>
        <option value="Perikanan">Perikanan</option>
        <option value="Kehutanan">Kehutanan</option>
        <option value="FIB">FIB</option>
        <option value="Kedokteran">Sekolah Pascasarjana</option>
    </select>
        <br>
        <button type="submit" class="btn btn-primary mb-3">Simpan Data</button>
    </form>
    <br>

    <table class="table container">
        <thead>
        <div class="alert container alert-dark" role="alert"> Data Mahasiswa </div>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
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
           
        </tbody>
        
    </table>
    
  
  
</body>
</html>