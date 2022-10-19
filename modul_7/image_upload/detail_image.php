<?php
include_once("../koneksi.php");
$db = new Database();
$id = $_GET['id'];
if (!is_null($id)) {
  $img = $db->show_image($id);
} else {
  header("location:../index.php");
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

<body class="min-h-screen backdrop-blur-sm tracking-tighter text-slate-800" style="background-image: url('../images/<?= $img['image_path'] ?>'); background-attachment: cover; background-size: cover;">
  <div class="flex justify-center items-center h-full">
    <div class="w-[90%] md:w-1/2 relative overflow-hidden group">
      <div class="absolute inset-0 bg-black/50 p-10 space-y-3 flex justify-start items-end translate-y-96 group-hover:translate-y-0 transition duration-300" id="modal">
        <div>
          <h2 class="text-3xl text-white">
            <?= $img['description'] ?>
          </h2>
          <em class="text-slate-300 text-sm block mb-5 mt-2">
            <?= $img['image_type'] ?> - <?= $img['image_size'] ?>
          </em>
          <a href="../images/<?= $img['image_path'] ?>" download="../images/<?= $img['image_path'] ?>" class="border border-slate-400 text-white text-sm font-semibold py-3 px-5 inline-block hover:bg-black/50 transition duration-300">Download</a>
        </div>
      </div>
      <img src="../images/<?= $img['image_path'] ?>" class="w-full cursor-pointer" alt="">
    </div>
  </div>
</body>

</html>