<?php
class database
{
  var $host = "localhost";
  var $username = "root";
  var $password = "";
  var $database = "akademik";

  function __construct()
  {
    $koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    if (!$koneksi) {
      echo "Koneksi ke database gagal" . mysqli_connect_error();
    } else {
      echo "Koneksi ke database mysql dengan php berhasil";
    }
  }
}
$koneksi  = new database();