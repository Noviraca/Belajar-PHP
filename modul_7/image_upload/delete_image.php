<?php
include_once('../koneksi.php');
$db = new Database();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $db->destroy_image($id);
} else {
  header('location:index.php');
}
