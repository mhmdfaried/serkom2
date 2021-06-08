<?php
include 'koneksi.php';
$id = $_GET['id'];

//query hapus
mysqli_query($koneksi, "DELETE FROM tbl_barang where id =$id") or die(mysqli_error($koneksi));


echo "<script>alert('Data Berhasil Dihapus.');window.location='index.php';</script>";
