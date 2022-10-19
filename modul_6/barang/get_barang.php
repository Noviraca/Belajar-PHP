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
  <title>Pembelian Barang - Modul 6</title>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>

<body class="bg-light">
  <header class="container-md mt-md-5 mt-3">
    <div class="card border-0 shadow-sm">
      <div class="card-body d-flex align-items-center justify-content-between">
        <h5 class="m-0">Daftar Barang</h5>
        <a href="create_barang.php" class="btn btn-primary btn-sm">Tambah</a>
      </div>
    </div>
  </header>
  <main class="container-md py-md-3 py-3">
    <div class="card border-0 shadow-sm">
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Barang</th>
              <th>Stok</th>
              <th>Harga Beli</th>
              <th>Harga Jual</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($barang as $key => $b) {
            ?>
              <tr>
                <td><?= $key + 1; ?></td>
                <td><?= $b['nama'] ?></td>
                <td><span class="badge bg-primary"><?= $b['stok'] ?></span></td>
                <td>Rp <?= number_format($b['harga_beli'], 2, ',', '.') ?></td>
                <td>Rp <?= number_format($b['harga_jual'], 2, ',', '.') ?></td>
                <td class="text-end">
                  <a href="update_barang.php?id=<?= $b['id'] ?>" class="text-decoration-none text-white badge "style="background-color:orange; color:white">Edit</a>
                  <a href="process_barang.php?id=<?= $b['id'] ?>&action=delete" class="text-decoration-none text-white badge bg-read "style="background-color:purple; color:white">Hapus</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>
</body>

</html>