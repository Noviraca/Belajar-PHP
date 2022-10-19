<?php
include_once('../koneksi.php');
$db = new Database();

if (isset($_POST['register'])) {
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  if ($db->register($nama, $username, $password)) {
    header("location:login.php");
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register - Modul 6</title>
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
          <h5 class="mb-1">Register</h5>
          <small class="text-muted">Apa Sudah mendaftar ? <a href="login.php" class="text-primary text-decoration-none fw-semibold">Masuk</a> ke akun Anda.</small>
        </div>
        <form action="" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control form-control-lg border-light bg-light" style="font-size: medium;" required>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control form-control-lg border-light bg-light" style="font-size: medium;" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control form-control-lg border-light bg-light" style="font-size: medium;" required>
          </div>
          <button class="btn btn-primary rounded-3 mt-2 px-4 py-2 fw-semibold" name="register">Register</button>
        </form>
      </div>
    </div>
  </main>
</body>

</html>