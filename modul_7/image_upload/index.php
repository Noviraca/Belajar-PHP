<?php
include_once("../koneksi.php");
$db = new Database();
if (isset($_POST['simpan'])) {
  $temp = $_FILES['image']['tmp_name'];
  $name = rand(0, 9999) . $_FILES['image']['name'];
  $size = $_FILES['image']['size'];
  $type = $_FILES['image']['type'];
  $keterangan = $_POST['description'];
  $folder = "../images/";
  $img_upload = $db->image_upload(
    $temp,
    $name,
    $size,
    $type,
    $keterangan,
    $folder
  );
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Upload - Modul 7</title>
  <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="min-h-screen bg-slate-50 tracking-tighter text-slate-800">
  <?php
  if (isset($img_upload)) {
  ?>
    <div class="flex justify-center">
      <button onclick="close_alert()" id="alert" class="fixed z-10 top-5 shadow-xl bg-rose-500 text-white rounded-lg p-3 text-sm font-semibold cursor-pointer">
        Ups Gagal upload file!
      </button>
    </div>
  <?php } ?>
  <div class="flex justify-center items-center h-full">
    <div class="bg-white rounded-lg shadow-sm w-1/2">
      <div class="p-4 border-b flex justify-between items-center">
        <h4 class="text-lg font-semibold">Upload Image</h4>
        <a href="../index.php" class="bg-slate-100 rounded-full p-1 hover:bg-slate-200 transition duration-200 group">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 m-0 group-hover:-translate-x-0.5 transition duration-300" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="5" y1="12" x2="19" y2="12" />
            <line x1="5" y1="12" x2="11" y2="18" />
            <line x1="5" y1="12" x2="11" y2="6" />
          </svg>
        </a>
      </div>
      <div class="p-4">
        <form action="" method="post" enctype="multipart/form-data" class="inline">
          <div class="mb-3">
            <label for="image" class="text-sm text-slate-500 block mb-2">Image</label>
            <input type="file" name="image" id="image" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 file:cursor-pointer file:hover:bg-blue-100 cursor-pointer file:transition file:duration-300" required>
          </div>
          <div class="mb-3">
            <label for="description" class="text-sm text-slate-500 block mb-2">Description</label>
            <textarea name="description" id="description" class="w-full border border-slate-200 rounded-lg focus:outline-none py-3 px-4 text-sm bg-slate-50" required></textarea>
          </div>
          <button class="block rounded-lg py-2 px-5 bg-blue-500 text-sm font-semibold text-white" name="simpan">Simpan</button>
        </form>
      </div>
    </div>
  </div>
  <script>
    function close_alert() {
      let alert = document.getElementById("alert");
      alert.remove()
    }
  </script>
</body>

</html>