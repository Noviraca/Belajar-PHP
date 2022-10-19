<?php
include_once("../koneksi.php");
$db = new Database();
// Grafik Penjualan
$produk = mysqli_query($db->koneksi, "select * from barang");
while ($row = mysqli_fetch_array($produk)) {
  $nama_produk[] = $row['nama'];

  $query = mysqli_query($db->koneksi, "select sum(jumlah) as jumlah from penjualan where id='" . $row['id'] . "'");
  $row = $query->fetch_array();
  $jumlah_produk[] = $row['jumlah'];
}
// Random Color
$colors = $db->random_color($nama_produk);
// Laporan Penjuala Per Bulan
$label = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
for ($bulan = 1; $bulan < 13; $bulan++) {
  $query = mysqli_query($db->koneksi, "select sum(jumlah) as jumlah from penjualan where MONTH(tgl_penjualan)='$bulan'");
  $row = $query->fetch_array();
  $produk_jumlah[] = $row['jumlah'];
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chart JS - Modul 7</title>
  <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="min-h-screen bg-slate-50 tracking-tighter text-slate-800 pb-10">
  <header class="text-center">
    <h2 class="text-2xl font-semibold pt-10">Statistic with Chart JS</h2>
    <div class="mt-2">
      <a href="../index.php" class="text-cyan-500 text-sm">Back</a>
    </div>
  </header>
  <!-- Pie Chart -->
  <div class="flex flex-col lg:flex-row justify-center mt-14 px-5 gap-2">
    <div class="w-[90%] lg:w-3/4">
      <div class="bg-white rounded-lg w-full p-5 shadow-sm">
        <h3 class="mb-5 text-start">Grafik Penjualan - Pie Chart</h3>
        <div class="w-3/4 mx-auto m-3">
          <canvas id="pieChart"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Line Chart -->
  <div class="flex flex-col lg:flex-row justify-center mt-14 px-5 gap-2">
    <div class="w-[90%] lg:w-3/4">
      <div class="bg-white rounded-lg w-full p-5 shadow-sm">
        <h3 class="mb-5 text-start">Grafik Penjualan - Line Chart</h3>
        <canvas id="lineChart"></canvas>
      </div>
    </div>
  </div>
  <!-- Bar Chart -->
  <div class="flex justify-center mt-5 px-5">
    <div class="w-[90%] lg:w-3/4">
      <div class="bg-white rounded-lg w-full p-5 shadow-sm">
        <h3 class="mb-5 text-start">Laporan Penjualan Per Bulan - Bar Chart</h3>
        <canvas id="barChart"></canvas>
      </div>
    </div>
  </div>
  <script src="../node_modules/chart.js/dist/chart.js"></script>
  <script>
    // Grafik Penjualan
    // Pie Chart
    const data = {
      labels: <?= json_encode($nama_produk) ?>,
      datasets: [{
        label: 'Grafik Penjualan',
        data: <?= json_encode($jumlah_produk) ?>,
        backgroundColor: <?= json_encode($colors) ?>,
        hoverOffset: 4
      }]
    };
    const config = {
      type: 'pie',
      data: data,
    };
    // Line Chart
    const label1 = <?= json_encode($nama_produk) ?>;
    const data1 = {
      labels: label1,
      datasets: [{
        label: 'Grafik Penjualan',
        data: <?= json_encode($jumlah_produk) ?>,
        backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
        ],
        borderColor: [
          'rgb(54, 162, 235)',
        ],
        borderWidth: 1
      }]
    };
    const config1 = {
      type: 'line',
      data: data1,
      options: {
        animations: {
          tension: {
            duration: 1000,
            easing: 'linear',
            from: 1,
            to: 0,
            loop: true
          }
        },
        scales: {
          y: { // defining min and max so hiding the dataset does not change scale range
            min: 0,
            max: 100
          }
        }
      },
    };
    // Laporan Penjualan Perbulan
    const labels2 = <?= json_encode($label) ?>;
    const data2 = {
      labels: labels2,
      datasets: [{
        label: 'Grafik Penjualan',
        data: <?= json_encode($produk_jumlah) ?>,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
        ],
        borderColor: [
          'rgb(255, 99, 132)',
        ],
        borderWidth: 1
      }]
    };
    const config2 = {
      type: 'bar',
      data: data2,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    };
  </script>
  <script>
    // Grafik Penjualan
    // Pie Chart
    const pieChart = new Chart(
      document.getElementById('pieChart'),
      config
    );
    // Line Chart
    const lineChart = new Chart(
      document.getElementById('lineChart'),
      config1
    );
    // Laporan Penjualan Perbulan
    const barChart = new Chart(
      document.getElementById('barChart'),
      config2
    );
  </script>
</body>

</html>