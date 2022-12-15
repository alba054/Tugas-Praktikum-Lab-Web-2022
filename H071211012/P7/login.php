<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: minuman.php");
    exit;
}
require 'functions.php';
require 'user.php';

if(isset($_POST['login-but'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User($username, $password, $conn);

    if($user->login() == 1){
        $_SESSION['login'] = true;
        echo "<script>
                alert('Login berhasil!');
                document.location.href = 'minuman.php';
            </script>";
        
    } else {
        echo "<script>
                alert('Login gagal!');
                document.location.href = 'login.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container loginsignup-container">
        <div class="row loginsignup-content justify-content-center p-5">
            <div class="col">
                <div class="logsign-content">
                    <div class="logsign-title">
                        <p class="h3" id="header-text">Login</p>
                        <hr>
                        <br>
                    </div>
                    <div class="logsign-form">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Anda">
                            </div>
                            <br>
                            <a href="signup.php"><p class="h7">Don't have account? Let's Create</p></a>
                            <br>
                            <button type="submit" class="loginsign-but" name="login-but" id="login-but">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>