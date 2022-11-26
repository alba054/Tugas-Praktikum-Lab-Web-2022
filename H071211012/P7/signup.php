<?php 
require 'functions.php';
require 'user.php';

if (isset($_POST['signup-but'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirmpassword = htmlspecialchars($_POST['confirm-password']);

    $user = new UserSignup($username, $password, $conn, $email);
    if ($password == $confirmpassword) {
        $result = $user->register();
        if ($result == 1) {
            echo "<script>
                    alert('User berhasil ditambahkan!');
                    document.location.href = 'login.php';
                </script>";
        } else if ($result == 0) {
            echo "<script>
                    alert('username atau email sudah ada, silahkan coba yang lain!');
                    document.location.href = 'signup.php';
                </script>";
        }else {
            echo "<script>
                    alert('User gagal ditambahkan!');
                    document.location.href = 'signup.php';
                </script>";
        }        
    } else {
        echo "<script>alert('Password dan Confirm Password tidak sama!')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
                        <p class="h3" id="header-text">Sign Up</p>
                        <hr>

                    </div>
                    <div class="logsign-form">
                        <form action="" method="post">
                        <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda" required>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Anda" required>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Masukkan Lagi Password Anda" required>
                            </div>
                            <br>
                            <a href="login.php"><p class="h7">Already have an Account?</p></a>
                            <br>
                            <button type="submit" class="loginsign-but" name="signup-but" id="signup-but">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>