<?php
class Menu
{
    private $nama_minuman;
    private $jenis_minuman;
    private $description;
    private $harga;
    private $conn;

    public function __construct($nama_minuman, $jenis_minuman, $description, $harga, $conn)
    {
        $this->nama_minuman = $nama_minuman;
        $this->jenis_minuman = $jenis_minuman;
        $this->description = $description;
        $this->harga = $harga;
        $this->conn = $conn;
    }

    public function inputData()
    {
        if (is_string($this->harga) || $this->harga < 0 || is_float($this->harga)) {
            echo "<script>
                alert('Inputan salah!');
                </script>";
            return false;
        }
        $checkQuery = "SELECT * FROM minuman WHERE nama_minuman = '$this->nama_minuman'";
        $check = mysqli_query($this->conn, $checkQuery);
        if (mysqli_num_rows($check) > 0) {
            echo "<script>
            alert('Data sudah ada');
        </script>";
            return false;
        }
        $insertquery = "INSERT INTO minuman VALUES
                ('', '$this->nama_minuman', '$this->jenis_minuman', '$this->description', $this->harga)";
        mysqli_query($this->conn, $insertquery);
        return mysqli_affected_rows($this->conn);
    }

    public function editData($data)
    {
        $id = $data['modalid'];
        // Mengembalikan ke menu awal jika harga tidak berupa bilangan bulat
    if (is_string($this->harga) || $this->harga < 0 || is_float($this->harga)) {
        echo "<script>
            alert('Inputan salah!');
            </script>";
        return false;
    }

    $updatequery = "UPDATE minuman 
                    SET `nama_minuman` = '$this->nama_minuman', `jenis_minuman` = '$this->jenis_minuman', `description` = '$this->description', `harga` = $this->harga  
                    WHERE `id` = '$id'";
    mysqli_query($this->conn, $updatequery);
    return mysqli_affected_rows($this->conn);
    }

    public function hapusData($data)
    {
        $id = $data['deleteData'];
        $deletequery = "DELETE FROM minuman WHERE id = '$id'";
        mysqli_query($this->conn, $deletequery);
        return mysqli_affected_rows($this->conn);
    }
}
