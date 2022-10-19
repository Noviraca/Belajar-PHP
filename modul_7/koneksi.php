<?php

class Database
{
  var $host = "localhost";
  var $username = "root";
  var $password = "";
  var $database = "modul7";

  function __construct()
  {
    $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    if (mysqli_connect_errno()) echo "Koneksi ke database gagal" . mysqli_connect_error();
  }

  function get_images()
  {
    $data = mysqli_query($this->koneksi, "select * from galleries");
    if ($data->num_rows > 0) {
      return $data;
    }
    return 0;
  }

  function image_upload($temp, $name, $size, $type, $keterangan, $folder)
  {
    if ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png' or $type == 'image/jpg')) {
      move_uploaded_file($temp, $folder . $name);
      mysqli_query($this->koneksi, "insert into galleries (image_path,description,image_type,image_size) values ('$name','$keterangan','$type','$size')");
      header('location:../index.php');
    } else {
      return 0;
    }
  }

  function show_image($id)
  {
    $image = mysqli_query($this->koneksi, "select * from galleries where id='$id'");
    return $image->fetch_array();
  }

  function destroy_image($id)
  {
    $query = mysqli_query($this->koneksi, "select * from galleries where id='$id'");
    $data_gambar = $query->fetch_array();
    unlink('../images/' . $data_gambar['image_path']);
    $query_hapus = mysqli_query($this->koneksi, "delete from galleries where id='$id'");
    header('location:../index.php');
  }

  // Export to pdf Using Dompdf
  function get_siswa()
  {
    $siswa = mysqli_query($this->koneksi, "select * from siswa");
    if ($siswa->num_rows > 0) {
      return $siswa;
    }
    return 0;
  }

  // Chart JS
  function random_color($values)
  {
    $colors = [];
    foreach ($values as $val) {
      $color = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
      array_push($colors, $color);
    }
    return $colors;
  }
}
