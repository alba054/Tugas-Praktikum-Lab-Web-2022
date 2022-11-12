<?php
$host="localhost:3308";
$user  ="root";
$pass  ="";
$db    ="db_tugas6";

$koneksi =mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die ("Tidak bisa terkoneksi ke database");
}

$nim       = "";
$nama      = "";
$alamat    = "";
$fakultas  = "";
$sukses    = "";
$error     = "";

if(isset($_GET['op'])){
    $op = $_GET['op'];
}else {
    $op = "";
}

if($op == 'delete'){
    $id   = $_GET['id'];
    $sql1 = "delete from datamahasiswa where No = '$id'";
    $q1   = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil menghapus data";
    }else{
        $error = "Gagal menghapus data";
    }
}

if($op == 'edit'){
    $id          = $_GET ['id'];
    // echo $id;
    $sql1        = "select * from datamahasiswa where No= '$id'";
    $q1          = mysqli_query($koneksi,$sql1);
    // var_dump($q1);
    // mysqli_error($koneksi);s
    // $r1          = mysqli_fetch_array($q1, MYSQLI_ASSOC);
    
    $id = "";
    $nim = "";
    $nama = "";
    $alamat = "";
    $fakultas = "";
    while($r2 = $q1->fetch_assoc()){
        // foreach ($r2 as $key => $value) {
        //     echo $key, " ", $value;
        // }
         $id       =$r2['No'];
         $nim      =$r2['Nim'];
         $nama     =$r2['Nama'];
         $alamat   =$r2['Alamat'];
         $fakultas =$r2['Fakultas'];
    }
    // $nim         =$r1['nim'];
    // $nama        =$r1['nama'];
    // $alamat      =$r1['alamat'];
    // $fakultas    =$r1['fakultas'];

    if($nim == ''){
        $error = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])){
    // echo "test";
    $nim       =$_POST['nim'];
    $nama      =$_POST['nama'];
    $alamat    =$_POST['alamat'];
    $fakultas  =$_POST['fakultas'];
    $q1   =mysqli_query($koneksi,"select * from datamahasiswa where Nim= '$nim'");
    // var_dump($q1->num_rows);
    

    if($nim && $nama && $alamat && $fakultas){
        if($q1->num_rows > 0){
            // var_dump($q1);
            $sql1 = "update datamahasiswa set Nim ='$nim', Nama='$nama', Alamat='$alamat', Fakultas='$fakultas' where Nim = '$nim'";
            $q1   =mysqli_query($koneksi,$sql1);
            if($q1){
                $sukses = "Data berhasil diubah";
            }else {
                $error = "Data gagal diubah";
            }
        }else{
            // echo "halo";
            $sql1   ="insert into datamahasiswa(nim,nama,alamat,fakultas) values('$nim', '$nama', '$alamat', '$fakultas')";
            $q1     =mysqli_query($koneksi,$sql1);
            if($q1){
                $sukses  = "Berhasil memasukkan data baru";
            }else{
                $error    ="Gagal memasukkan data baru";
            } 

          }

    }else{
        $error = "Masukkan data anda terlebih dahulu";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .mx-auto{
            margin-top:30px;
            width:800px;
        }
        .card {
            margin-top:10px;
        }
    </style>
</head>
<body>
<div class="mx-auto">
<div class="card">
  <div class="card-header bg-warning text-light" >
    Created / Edit Data
  </div>
  <div class="card-body">
    <?php
    if($error){
       ?>
       <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
        </div
       <?php
       header("refresh:4;url=index.php");
    }
    ?>
    <?php
    if($sukses){
       ?>
       <div class="alert alert-warning" role="alert">
        <?php echo $sukses ?>
        </div
       <?php
       header("refresh:4;url=index.php");
    }
    ?>
    
    <form action="index.php" method="POST">  

    <div class="mb-3 row">
    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim?>">
      </div>
  </div>
      
    <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama?>">
      </div>
  </div>

      <div class="mb-3 row">
      <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat?>">
        </div>
  </div>

        <div class="mb-3 row">
        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
        <div class="col-sm-10">
            <select class="form-control" id="fakultas" name="fakultas">
                <option value=""> - Pilih Fakultas - </option>
                <option value="saintek" <?php if($fakultas == "saintek") echo "selected"?>>Saintek</option>
                <option value="Soshum" <?php if($fakultas == "soshum") echo "selected"?>>Soshum</option>
            </select>
        </div>
  </div>
        <div class="col-12">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-success">

        </div>
</form>
  </div>
</div>

<div class="card">
  <div class="card-header text-white bg-warning">
    Data Mahasiswa
  </div>
  <div class="card-body">
    <table class="table">
        <thead>
             <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Aksi</th>
             </tr>
             <tbody>
                <?php
                $sql2 = "select * from datamahasiswa";
                $q2   = mysqli_query($koneksi,$sql2);
                // echo $q2;
                // var_dump($q2);
                $urut =1;

                 while($r2 = $q2->fetch_assoc()){
                    // foreach ($r2 as $key => $value) {
                    //     echo $key, " ", $value;
                    // }
                     $id       =$r2['No'];
                     $nim      =$r2['Nim'];
                     $nama     =$r2['Nama'];
                     $alamat   =$r2['Alamat'];
                     $fakultas =$r2['Fakultas'];
                 
                 ?>
                    <tr>
                      <th scope="row"><?php echo $urut++ ?></th>
                         <td srope="row"><?php echo $nim ?></td>
                         <td srope="row"><?php echo $nama ?></td>
                         <td srope="row"><?php echo $alamat ?></td>
                         <td srope="row"><?php echo $fakultas ?></td>
                         <td scope="row">
                            <a href="index.php?op=edit&id=<?php echo $id?> "><button type="button" class="btn btn-outline-info">Edit</button></a>
                            <a href="index.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin ingin menghapus data?')" ><button type="button" class="btn btn-outline-danger">Delete</button></a>
                            

                        </td>
                        
                     </tr>
                 
                     <?php

                }
                ?>
             </tbody>
        </thead>
    </table>
</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>