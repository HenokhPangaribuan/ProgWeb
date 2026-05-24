<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin") {
    echo "<h1>Login berhasil!</h1>";
    echo "<h1>Selamat datang, <font color='blue'>admin.</font></h1>";
    echo "<a href='index.html'><font size='6'>kembali ke halaman login</font></a>";
} else {
    echo "<h2><font color='red'>Username : $username Tidak Terdaftar!</font></h2>";
    echo "<a href='index.html'><font size='6'>kembali ke halaman login</font></a>";
}
