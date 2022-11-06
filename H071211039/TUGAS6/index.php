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
<?php 
        $koneksi = mysqli_connect("localhost", "root", "", "dblab", 3308);
        $database = null;
        if(isset($_GET['op'])) {
            $op = $_GET['op'];
        } else $op = "";
        if ($op == "") {
            try {
                if ($_POST) {
                    // $sql = 
                    $database = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES (" . "'" . $_POST["NIM"] . "'" . "," . "'" . $_POST["Nama"] . "'" . "," . "'" . $_POST["Alamat"] . "'" . "," . "'" . $_POST["Fakultas"] . "'" . ")");
                    echo '<div class="container alert alert-success" role="alert">
                    data berhasi diinput
                  </div>';
                }
            } catch (\Throwable $th) {
                echo '<div class="container alert alert-danger" role="alert">
                    nim duplikat
                  </div>';
                // echo $th;
            }
        } elseif ($op == 'edit') {
            try {
                if (isset($_POST["NIM"])) {
                    // foreach ($_POST as $key => $value) {
                    //     echo $key . " " . $value;
                    // }
                    $database = mysqli_query($koneksi,"UPDATE mahasiswa SET NIM = '" . $_POST['NIM'] . "'," . "Nama ='" . $_POST['Nama']. "'," . "Alamat ='" . $_POST['Alamat'] . "'," . "Fakultas ='" . $_POST['Fakultas'] . "' WHERE NIM = '" .$_GET['update_id']. "'" );
                    header("Refresh:0; url=index.php");
                }
            } catch (\Throwable $th) {
                echo '<div class="container alert alert-danger" role="alert">
                    Error edit data
                  </div>';
                echo $th;
            }
        }
    ?>
    <!-- if pembuka -->
    <?php 
        $mahasiswa = null;
        $datamahasiswa = [];
        if (isset($_GET["update_id"])) {
            $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE NIM = " . "'" . $_GET["update_id"] . "'");
            while($simpanData = mysqli_fetch_assoc($mahasiswa)) $datamahasiswa[] = $simpanData;
        }
        $database = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        $arrDatabase= [];
        while($simpanData= mysqli_fetch_assoc($database)) $arrDatabase[]= $simpanData;
        // foreach ($datamahasiswa as $key => $value) {
        //     foreach ($datamahasiswa[$key] as $keysiswa => $values) {
        //         echo $keysiswa . " " . $values;
        //     }
        // }
    ?>

    <form class="container" action="" method="post">
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
        <option selected><?= isset($_GET["update_id"]) ? $datamahasiswa[0]["Fakultas"] : "Fakultas" ?></option>
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
            <?php for ($i=0; $i<count($arrDatabase); $i++): ?>
                <tr scope="row">
                    <td><?= $arrDatabase[$i]["NIM"] ?></td>
                    <td><?= $arrDatabase[$i]["Nama"] ?></td>
                    <td><?= $arrDatabase[$i]["Alamat"] ?></td>
                    <td><?= $arrDatabase[$i]["Fakultas"] ?></td>
                    <td>
                        <a href="?op=edit&update_id=<?= $arrDatabase[$i]["NIM"] ?>" type="button" class="btn btn-warning">EDIT</a>
                        <a href="?id=<?= $arrDatabase[$i]["NIM"] ?>" type="button" class="btn btn-danger" id="deletebutton">DELETE</a>
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    
    <script>
        const deleteButton = document.getElementById("deletebutton");
        deleteButton.addEventListener("click", function () {
            if (confirm("YAKIN INGIN MENGHAPUS DATA ?")) {
                <?php
                    if (isset($_GET["id"])) {
                        echo "NIM: " . $_GET["id"];
                        $database = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE NIM = " . "'" . $_GET["id"] . "'");
                        header("Refresh:0; url=index.php");
                    }
                ?>
            } else {
                console.log("oke ,_,")
            }
        })
    </script>
</body>
</html>