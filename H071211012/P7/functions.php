<?php
$conn = mysqli_connect("localhost", "root", "", "ayncoffee");

function query($query) 
{
    global $conn;
    $code = mysqli_query($conn, $query);
    $result = [];
    while ($hasil = mysqli_fetch_assoc($code)) {
        $result[] = $hasil;
    }
    return $result;
}

function showModal($condition)
{
    if ($condition) {
        echo "<script> showModal() </script>";
    } else {
        echo "<script> closeModal() </script>";
    }
}

function search($keyword)
{
    $query = "SELECT * FROM minuman WHERE nama_minuman LIKE '%$keyword%' OR jenis_minuman LIKE '%$keyword%' OR 'description' LIKE '%$keyword%' OR harga LIKE '%$keyword%'"; 
    return query($query);
}

if (isset($_GET['editID'])) 
{
    $id = $_GET['editID'];
    
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM minuman WHERE id = $id");
    $data = mysqli_fetch_assoc($query);

    $nama_minuman = $data['nama_minuman'];
    $jenis_minuman = $data['jenis_minuman'];
    $deskripsi = $data['description'];
    $harga = $data['harga'];

    // response akan berisi data berikut yang diberi tanda '#' sebagai pemisah nantinya
    echo $id, "#", $nama_minuman, "#", $jenis_minuman, "#", $deskripsi, "#", $harga;
}


// // Function-function untuk menampilkan
// Menampilkan form utama
function showPriForm()
{
    echo "
    <form method='post'>
                    <div class='row mt-2'>
                        <label for='namaminuman-input' class='input-name my-auto col-sm-3 '>Nama Minuman</label>
                        <div class='col'>
                            <input type='text' name='namaminuman' class='form-control input-field' id='namaminuman-input' required>
                        </div>
                    </div>
                    <div class='row mt-2'>
                        <label for='jenisminuman-input' class='input-name my-auto col-sm-3'>Jenis Minuman</label>
                        <div class='col'>
                            <input type='text' name='jenisminuman' class='form-control input-field' id='jenisminuman-input' required>
                        </div>
                    </div>
                    <div class='row mt-2'>
                        <label for='deskripsi-input' class='input-name my-auto col-sm-3'>Deskripsi</label>
                        <div class='col'>
                            <input type='text' name='deskripsi' class='form-control input-field' id='deskripsi-input' required>
                        </div>
                    </div>
                    <div class='row mt-2'>
                        <label for='harga-input' class='input-name my-auto col-sm-3'>Harga</label>
                        <div class='col'>
                            <input type='number' name='harga' class='form-control input-field' id='harga-input' min='0' required>
                        </div>
                    </div>
                    <div class='row mt-4'>
                        <button id='submit-button' name='submit' type='submit'>Submit</button>
                    </div>
                </form>
    ";
}

// Menampilkan modal
function showModalForm()
{
    echo "
    <div class='modalsec-container'>
            <div class='container p-4 modalsec'>
                <div class='row p-1'>
                    <div class='col'>
                        <div class='d-flex justify-content-center'>
                            <p class='h3' id='modalheadertxt'>UPDATE DATA</p>
                                <button type='submit' class='btn btn-secondary' id='closeModal' name='closeModal' onclick='closeModal()' style='font-size: 13px'>
                                    <p class='h6'>X</p>
                                </button>
                        </div>
                    </div>
                </div>
                <div class='row p-1'>
                    <div class='col'>
                        <form method='post'>
                            <div class='row mt-2'>
                                <div class='col'>
                                    <input type='hidden' name='modalid' class='form-control input-field' id='idminuman-input' required>
                                </div>
                                <div class='d-flex justify-content-center p-2'>
                                    <label for='modalnamaminuman-input' class='input-name my-auto col-sm-3 '>Nama Minuman</label>
                                    <div class='col'>
                                        <input type='text' name='modalnamaminuman' class='form-control input-field' id='input-nama'  required>
                                    </div>
                                </div>
                                <div class='d-flex justify-content-center p-2'>
                                    <label for='modalnjenisminuman-input' class='input-name my-auto col-sm-3 '>Jenis Minuman</label>
                                    <div class='col'>
                                        <input type='text' name='modaljenisminuman' class='form-control input-field' id='input-jenis'  required>
                                    </div>
                                </div>
                                <div class='d-flex justify-content-center p-2'>
                                    <label for='modaldescription-input' class='input-name my-auto col-sm-3 '>Deskripsi</label>
                                    <div class='col'>
                                        <input type='text' name='modaldescription' class='form-control input-field' id='input-deskripsi'  required>
                                    </div>
                                </div>
                                <div class='d-flex justify-content-center p-2'>
                                    <label for='modalharga-input' class='input-name my-auto col-sm-3 '>Harga</label>
                                    <div class='col'>
                                        <input type='number' name='modalharga' class='form-control input-field' id='input-harga' min='0' required>
                                    </div>
                                </div>
                                <div class='d-flex justify-content-center p-2'>
                                    <button type='submit' class='btn btn-primary' id='modalSubmit' name='modalSubmit' style='font-size: 13px'>
                                        <p class='h6'>Update</p>
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    ";
}