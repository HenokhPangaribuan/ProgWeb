<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data</title>
    <style>
        body {
            font-family: Arial;
        }

        .box {
            width: 500px;
            margin: auto;
            border: 1px solid #ddd;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        input[type=text] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
        }

        .btn1 {
            background: #4CAF50;
            color: white;
            padding: 8px 15px;
            border: none;
        }

        .btn2 {
            background: #2196F3;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Tambah Data Siswa</h2>
        <form method="POST" action="proses_tambah.php">
            Nama:<br>
            <input type="text" name="nama"><br>
            Kelas:<br>
            <input type="text" name="kelas"><br>
            <input type="submit" value="Simpan" class="btn1">
        </form><br>
        <a href="index.php" class="btn2">Kembali</a>
    </div>
</body>

</html>