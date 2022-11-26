<?php 
$conn = mysqli_connect("localhost", "root", "", "ayncoffee");
class User {
    private $username;
    private $password;

    public function __construct($username, $password, $conn) {
        $this->username = $username;
        $this->password = $password;
        $this->conn = $conn;
    }

    public function login() {
        $query = "SELECT * FROM user WHERE username = '$this->username'";
        $result = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($result);
        if(password_verify($this->password, $row['password'])){
            return 1;
        } else {
            return 0;
        }
    }

}

class UserSignup extends User {
    private $email;
    public function __construct($username, $password, $conn, $email) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->conn = $conn;
    }
    
    public function register(){      
        $username = $this->username;
        $email = $this->email;
        $password = $this->password;
        $password = password_hash($password, PASSWORD_DEFAULT);
        try {
            $query = "INSERT INTO user VALUES ('', '$username', '$email', '$password')";
            mysqli_query($this->conn, $query);
            return mysqli_affected_rows($this->conn);
        } catch (Exception $e) {
            return 0;
        }   
    }
}
?>