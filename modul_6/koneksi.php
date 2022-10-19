<?php
class Database
{
  var $host = "localhost";
  var $username = "root";
  var $password = "";
  var $database = "penjualan";

  function __construct()
  {
    $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    if (mysqli_connect_errno()) {
      echo "Koneksi ke database gagal" . mysqli_connect_error();
    }
  }

  function register($nama, $username, $password)
  {
    $insert = mysqli_query($this->koneksi, "insert into user values (null,'$nama','$username','$password')");
    return $insert;
  }

  function login($username, $password, $remember)
  {
    $query = mysqli_query($this->koneksi, "select * from user where username='$username'");
    if ($query->num_rows == 0) {
      return header("location:login.php");
    };
    $data_user = $query->fetch_array();
    if (password_verify($password, $data_user['password'])) {
      if ($remember) {
        setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
        setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
      }
      $_SESSION['username'] = $username;
      $_SESSION['nama'] = $data_user['nama'];
      $_SESSION['is_login'] = TRUE;
      return TRUE;
    }
  }

  function relogin($username)
  {
    $query = mysqli_query($this->koneksi, "select * from user where username='$username'");
    $data_user = $query->fetch_array();
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $data_user['nama'];
    $_SESSION['is_login'] = true;
  }

  function get_barang()
  {
    $data = mysqli_query($this->koneksi, "select * from barang");
    while ($row = mysqli_fetch_array($data)) {
      $result[] = $row;
    }
    return $result;
  }

  function create_barang($nama, $stok, $harga_beli, $harga_jual)
  {

    mysqli_query($this->koneksi, "insert into barang values (null,'$nama','$stok','$harga_beli','$harga_jual')");
  }

  function show_barang($id)
  {
    $query = mysqli_query($this->koneksi, "select * from barang where id='$id'");
    return $query->fetch_array();
  }

  function update_barang($nama, $stok, $harga_beli, $harga_jual, $id)
  {
    mysqli_query($this->koneksi, "update barang set nama='$nama',stok='$stok',harga_beli='$harga_beli',harga_jual='$harga_jual' where id=$id limit 1");
  }

  function destroy_barang($id)
  {
    mysqli_query($this->koneksi, "delete from barang where id=$id");
  }
}
