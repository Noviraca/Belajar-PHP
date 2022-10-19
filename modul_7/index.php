<?php
include_once("koneksi.php");
$db = new Database();
$images = $db->get_images();
?>
<!doctype html>
<html class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Tugas Modul 7</title>
  <link href="dist/output.css" rel="stylesheet">
</head>

<body class="min-h-screen tracking-tighter text-slate-800 bg-slate-50">
  <header class="text-center">
    <h2 class="text-4xl font-semibold pt-10">Programmer web dasar (Laraver) - Modul <span class="animate-pulse">7</span></h2>
    <div class="mt-2">
      <a href="image_upload/index.php" class="text-cyan-500 text-sm">Upload Image</a> -
      <a href="export-dompdf/index.php" class="text-rose-500 text-sm">Export PDF using Dompdf</a> -
      <a href="php-chartjs/index.php" class="text-emerald-500 text-sm">Chart JS</a>
    </div>
  </header>
  <main class="w-full px-3 mt-10">
    <?php
    if ($images !== 0) {
    ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-3 w-full">
        <?php
        foreach ($images as $i) {
        ?>
          <div class="relative overflow-hidden rounded-lg shadow-lg group">
            <img src="images/<?= $i['image_path'] ?>" alt="<?= $i['image_path'] ?>" class="object-cover w-full h-full">
            <div class="absolute top-0 left-0 px-6 py-4 inset-0 group-hover:backdrop-blur-sm transition duration-200 flex justify-center items-center">
              <div class="flex gap-x-2">
                <a href="image_upload/detail_image.php?id=<?= $i['id'] ?>" class="p-2 bg-emerald-500 hover:bg-emerald-400 rounded-full group-hover:translate-y-0 translate-y-96 transition duration-400">
                  <button class="absolute inset-0" type="submit" name="detail"></button>
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-white" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="12" r="2" />
                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                  </svg>
                </a>
                <a href="image_upload/delete_image.php?id=<?= $i['id'] ?>" class="p-2 bg-rose-500 hover:bg-rose-400 rounded-full group-hover:translate-y-0 translate-y-96 transition duration-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-white" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="4" y1="7" x2="20" y2="7" />
                    <line x1="10" y1="11" x2="10" y2="17" />
                    <line x1="14" y1="11" x2="14" y2="17" />
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    <?php
    } else { ?>
      <div class="flex justify-center items-center h-96 w-full animate-pulse">No Image Found.</div>
    <?php } ?>
    <footer class="py-4 w-full text-center mt-10 text-sm h-full">
      Create by <a href="https://github.com/Noviraca" class="text-cyan-600 font-medium font-mono">@Noviraca</a>
    </footer>
  </main>
</body>

</html>