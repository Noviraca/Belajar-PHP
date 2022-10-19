<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tugas Modul 6</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>

<body class="bg-light">
  <header class="bg-white border-bottom ">
    <div class="py-4 d-flex justify-content-between align-items-center container-md">
      <h4 class="p-0 m-0">Programmer web dasar (Laraver) - Modul 6</h4>
      <?php
      if (isset($_SESSION['is_login'])) {
      ?>
        <a href="auth/logout.php" class="btn btn-danger">Logout</a>
      <?php
      } else {
      ?>
        <a href="auth/login.php" class="btn btn-primary">Login</a>
      <?php
      }
      ?>
    </div>
  </header>
  <main class="container-md py-md-5 py-3">
    <div class="list-group">
      <a href="barang/get_barang.php" class="list-group-item">
        Pembelian Barang
        <span class="float-end">1</span>
      </a>
    </div>
  </main>
</body>

</html>