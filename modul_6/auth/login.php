<?php
session_start();
include_once('../koneksi.php');
$db = new Database();

if (isset($_SESSION['is_login'])) {
  header("location:../barang/get_barang.php");
}

if (isset($_COOKIE['username'])) {
  $database->relogin($_COOKIE['username']);
  header('location:../barang/get_barang.php');
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (isset($_POST['remember'])) {
    $remember = TRUE;
  } else {
    $remember = FALSE;
  }
  if ($db->login($username, $password, $remember)) {
    header('location:../barang/get_barang.php');
  }
} ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - Modul 6</title>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <style>
    .width {
      width: 40%;
    }

    @media(max-width:768px) {
      .width {
        width: 95%;
      }
    }
  </style>
</head>

<body class="bg-light">
  <main class="min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card rounded-4 border-0 p-3 width">
      <div class="card-body">
        <div class="mb-4">
          <h5 class="mb-1">Login</h5>
          <small class="text-muted">Belum punya akun ? <a href="register.php" class="text-primary text-decoration-none fw-semibold">Register</a>.</small>
        </div>
        <form action="" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control form-control-lg border-light bg-light" style="font-size: medium;" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control form-control-lg border-light bg-light" style="font-size: medium;" required>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="remember" id="remember-me" value="option1">
            <label class="form-check-label" for="remember-me">Remember me</label>
          </div>
          <button class="btn btn-primary rounded-3 mt-3 px-4 py-2 fw-semibold d-block" name="login">Login</button>
        </form>
      </div>
    </div>
  </main>
</body>

</html>