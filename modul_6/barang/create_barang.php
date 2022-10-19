<?php
session_start();
if (!isset($_SESSION['is_login'])) {
  header("location:../auth/login.php");
}

include('../koneksi.php');
$db = new Database();
$barang = $db->get_barang();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Create Barang - Modul 6</title>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>

<body class="bg-light">
  <header class="container-md mt-md-5 mt-3">
    <div class="card border-0 shadow-sm">
      <div class="card-body d-flex align-items-center justify-content-between">
        <h5 class="m-0">Tambah Barang</h5>
        <button onclick="window.history.back()" class="btn btn-danger btn-sm">Kembali</button>
      </div>
    </div>
  </header>
  <main class="container-md py-md-3 py-3">
    <div class="card border-0 shadow-sm">
      <div class="card-body">
        <form action="process_barang.php?action=post" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Ex: Baju Tidur" required>
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" name="stok" id="stok" min="1" placeholder="Ex: 1" required>
          </div>
          <div class="mb-3">
            <label for="harga_beli" class="form-label">Harga Beli</label>
            <input type="number" class="form-control" name="harga_beli" id="harga_beli" min="1" placeholder="Ex: 1000" required>
          </div>
          <div class="mb-3">
            <label for="harga_jual" class="form-label">Harga Jual</label>
            <input type="number" class="form-control" name="harga_jual" id="harga_jual" min="1" placeholder="Ex: 1000" required>
          </div>
          <button class="btn btn-primary btn-sm float-end">Simpan</button>
        </form>
      </div>
    </div>
  </main>
</body>

</html>