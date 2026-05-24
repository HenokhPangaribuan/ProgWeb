<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
mysqli_query($koneksi, "INSERT INTO siswa VALUES('','$nama','$kelas')");
header("location:index.php");
