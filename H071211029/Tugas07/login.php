<?php
// if ($_GET) {
//   if (isset($_GET["logout"])) {
//     if ($_GET["logout"] == "True") {
//       session_destroy();
//       header("Location: http://localhost/Tugas7/login.php");
//     }
//   }
// }

session_start();

if(isset($_SESSION['email'])){
  header("Location: http://localhost/Tugas7/index.php");
}

$host = "localhost";
$user = "root";
$pass = "";
$db = "akademik";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if(!$koneksi){
  die("Tidak bisa terkoneksi ke database");
}

if($_POST){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql1 = "select * from akun where email = '$email'";
  $q1 = mysqli_query($koneksi, $sql1);
  $r1 = mysqli_fetch_array($q1);

  if($r1['email']){
    $_SESSION['email'] = $email;
    header("Location: http://localhost/Tugas7/index.php");
  }
}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="iconLogin.webp" class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form action="" method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input name="email" type="email" id="form1Example13" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example13">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input name="password" type="password" id="form1Example23" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example23">Password</label>
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">
              <a class="text-muted" href="#!">Forgot password?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            <!-- Register buttons -->
            <div class="text-center">
              <p>Not a member? <a class="text-muted" href="http://localhost/Tugas7/register.php">Register</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>