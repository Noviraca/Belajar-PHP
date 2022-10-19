<?php

include('../koneksi.php');
$koneksi = new Database();

$action = $_GET['action'];

if ($action == "post") {
  $koneksi->create_barang($_POST['nama'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
  header("location:get_barang.php");
} else if ($action == "put") {
  $koneksi->update_barang($_POST['nama'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual'], $_POST['id']);
  header("location:get_barang.php");
} else if ($action == "delete") {
  $koneksi->destroy_barang($_GET['id']);
  header("location:get_barang.php");
}
