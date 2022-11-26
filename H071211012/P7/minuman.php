<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
require 'menu.php';
$conn = mysqli_connect("localhost", "root", "", "ayncoffee");

if (isset($_POST['logout-but'])){
    session_destroy();
    header("Location: login.php");
    exit;
}

if (isset($_POST['search-button'])) {
    
    $showData = search($_POST['searchvalue']);
}

if (isset($_POST["submit"])) {
    $nama_minuman = htmlspecialchars($_POST["namaminuman"]);
    $jenis_minuman = htmlspecialchars($_POST["jenisminuman"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);
    $harga = (INT) $_POST["harga"];

    $minuman = new Menu($nama_minuman, $jenis_minuman, $deskripsi, $harga, $conn);
    $insertStatus = $minuman->inputData();
    if ($insertStatus > 0) {
        echo "<script>alert('Data Berhasil Ditambahkan!');</script>";
    } else if ($insertStatus < 0) {
        echo "<script>alert('Data Gagal Ditambahkan!');</script>";
    }
}

if (isset($_POST["deleteData"])) {
    $minuman = new Menu("", "", "", "", $conn);
    $deleteStatus = $minuman->hapusData($_POST);
    if ($deleteStatus > 0) {
        echo "<script>alert('Data Berhasil Dihapus!');</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus!');</script>";
    }
}

if (isset($_POST["modalSubmit"])) {
    $id = $_POST['modalid'];
    $nama_minuman = htmlspecialchars($_POST['modalnamaminuman']);
    $jenis_minuman = htmlspecialchars($_POST['modaljenisminuman']);
    $deskripsi = htmlspecialchars($_POST['modaldescription']);
    $harga = (INT) $_POST['modalharga'];
    $minuman = new Menu($nama_minuman, $jenis_minuman, $deskripsi, $harga, $conn);
    $updateStatus = $minuman->editData($_POST);
    if ($updateStatus > 0) {
        echo "<script>alert('Data Berhasil Diubah!');</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah!');</script>";
    }
}
$showData = query("SELECT * FROM minuman");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Minuman</title>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="menu-content">
            <div class="header d-flex mt-4 p-4">
                <div class="container ayn">
                    <p class="h4" id="ayn-text">AYN Coffee</p>
                    <hr id="ayn-line">
                </div>
                <form method="post">
                    <button id="logout-but" name="logout-but">Logout</button>
                </form>
            </div>
            <div class="title-button d-flex justify-content-between">
                <p class="h5 px-4" id="daftar-minuman-txt">Daftar Minuman</p>
            </div>
            <div class="mt-4 px-4 inputan">
                <?php showPriForm(); ?>
            </div>
            <div class="d-flex search-input m-4">
                <form method="post">
                    <div class="d-flex">
                        <input type="text" name="searchvalue" class="form-control" id="search-input" placeholder="Search Data">
                        <button type="submit" name="search-button" id="search-button">Search</button>
                    </div>
                </form>
            </div>
            <table class="list-table p-4 m-4">
                <tr align="center">
                    <th class="nomor-tb">No</th>
                    <th class="namaminuman-tb">Nama Minuman</th>
                    <th>Jenis Minuman</th>
                    <th class="desc-tb">Deskripsi</th>
                    <th>Harga</th>
                    <th class="aksi-tb">Aksi</th>
                </tr>
                <?php
                $i = 1;
                ?>
                <?php foreach ($showData as $data) : ?>
                    <tr align="center">
                        <td><?= $i; ?></td>
                        <td><?= $data["nama_minuman"] ?></td>
                        <td><?= $data["jenis_minuman"] ?></td>
                        <td><?= $data["description"] ?></td>
                        <td><?= $data["harga"] ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success p-1 modify" value="<?= $data['id']; ?>" name="editData" onclick="modify('modify', <?= $i - 1 ?>)" id="edit" style="font-size: 13px">Modify</button>
                                <form name="myForm" method="post">
                                    &nbsp;|&nbsp;
                                    <button type="submit" class="btn btn-danger p-1" value="<?= $data['id']; ?>" onclick="return confirm('Apakah Anda yakin?')<?php $data['id'] ?>" name="deleteData" style="font-size: 13px">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php 
                $i++;
                endforeach; ?>
            </table>
        </div>

        <?php showModalForm()?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="func.js"></script>
</body>

</html>