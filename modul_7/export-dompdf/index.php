<?php
include_once("../koneksi.php");
$db = new Database();
$siswa = $db->get_siswa();;
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Export Data to PDF using DOMPDF - Modul 7</title>
  <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="min-h-screen bg-slate-50 tracking-tighter text-slate-800 pb-10">
  <header class="text-center">
    <h2 class="text-2xl font-semibold pt-10">Daftar Siswa Sekolah Harapan Bangsa&negara</h2>
    <div class="mt-2">
      <a href="../index.php" class="text-cyan-500 text-sm">Back</a>
      or
      <a href="report.php" class="text-emerald-500 text-sm">Export</a>
    </div>
  </header>

  <div class="flex justify-center mt-14">
    <div class="overflow-x-auto relative w-[90%] lg:w-3/4">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="py-3 px-6">
              #
            </th>
            <th scope="col" class="py-3 px-6">
              Nama Siswa
            </th>
            <th scope="col" class="py-3 px-6">
              Kelas
            </th>
            <th scope="col" class="py-3 px-6">
              Alamat
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($siswa) {
            foreach ($siswa as $key => $s) {
          ?>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-6 w-2">
                  <?= $key + 1 ?>
                </td>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  <?= $s['nama'] ?>
                </th>
                <td class="py-4 px-6">
                  <?= $s['kelas'] ?>
                </td>
                <td class="py-4 px-6">
                  <?= $s['alamat'] ?>
                </td>
              </tr>
            <?php
            }
          } else {
            ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>