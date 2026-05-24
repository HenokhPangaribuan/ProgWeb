<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', kelas='$kelas' WHERE id='$id'");
header("location:index.php");
